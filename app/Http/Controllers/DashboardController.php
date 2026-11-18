<?php

namespace App\Http\Controllers;

use App\Data\JadwalData;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $jadwals = JadwalData::all();
        $analisis = app(AnalisisController::class)->dataAnalisis();
        return view('dashboard', [
            'totalJadwal' => count($jadwals),
            'totalKonflik' => count($analisis['bentrok']),
            'totalAman' => count($analisis['aman']),
            'jadwalTerbaru' => array_slice($jadwals, 0, 6),
        ]);
    }

    public function ringkasan()
    {
        $analisis = app(AnalisisController::class)->dataAnalisis();
        return view('ringkasan', ['total'=>count(JadwalData::all()), 'analisis'=>$analisis]);
    }

    public function tentang()
    {
        return view('tentang');
    }
}
