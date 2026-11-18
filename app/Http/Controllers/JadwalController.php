<?php

namespace App\Http\Controllers;

use App\Data\JadwalData;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index(Request $request)
    {
        $jadwals = JadwalData::all();
        $hari = $request->query('hari');
        $kelas = $request->query('kelas');
        if ($hari) $jadwals = array_values(array_filter($jadwals, fn($j) => strtolower($j['hari']) === strtolower($hari)));
        if ($kelas) $jadwals = array_values(array_filter($jadwals, fn($j) => strtolower($j['kelas']) === strtolower($kelas)));
        return view('jadwal.index', compact('jadwals', 'hari', 'kelas'));
    }

    public function hari(string $hari)
    {
        $jadwals = array_values(array_filter(JadwalData::all(), fn($j) => strtolower($j['hari']) === strtolower($hari)));
        abort_if(empty($jadwals), 404, 'Jadwal untuk hari tersebut tidak ditemukan.');
        return view('jadwal.hari', compact('jadwals', 'hari'));
    }

    public function show(int $id)
    {
        $jadwal = collect(JadwalData::all())->firstWhere('id', $id);
        abort_if(!$jadwal, 404, 'Data jadwal tidak ditemukan.');
        return view('jadwal.show', compact('jadwal'));
    }
}
