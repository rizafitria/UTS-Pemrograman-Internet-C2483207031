<?php

namespace App\Http\Controllers;

use App\Data\JadwalData;
use Illuminate\Routing\Controller;

class AnalisisController extends Controller
{
    /** Mengubah jam menjadi menit agar perbandingan rentang waktu akurat. */
    private function menit(string $jam): int
    {
        [$h, $m] = array_map('intval', explode(':', $jam));
        return ($h * 60) + $m;
    }

    /** Dua jadwal bertabrakan jika hari sama dan rentang waktunya saling tumpang tindih. */
    private function waktuBentrok(array $a, array $b): bool
    {
        return $a['hari'] === $b['hari']
            && $this->menit($a['mulai']) < $this->menit($b['selesai'])
            && $this->menit($b['mulai']) < $this->menit($a['selesai']);
    }

    public function dataAnalisis(): array
    {
        $data = JadwalData::all();
        $bentrok = [];
        $idsKonflik = [];
        $jumlah = count($data);
        for ($i = 0; $i < $jumlah; $i++) {
            for ($j = $i + 1; $j < $jumlah; $j++) {
                $a = $data[$i]; $b = $data[$j];
                if (!$this->waktuBentrok($a, $b)) continue;
                $alasan = [];
                if ($a['ruangan'] === $b['ruangan']) $alasan[] = 'Ruangan sama: '.$a['ruangan'];
                if ($a['dosen'] === $b['dosen']) $alasan[] = 'Dosen sama: '.$a['dosen'];
                if ($a['kelas'] === $b['kelas']) $alasan[] = 'Kelas sama: '.$a['kelas'];
                if ($alasan) {
                    $bentrok[] = ['a'=>$a, 'b'=>$b, 'alasan'=>$alasan];
                    $idsKonflik[$a['id']] = true;
                    $idsKonflik[$b['id']] = true;
                }
            }
        }
        $aman = array_values(array_filter($data, fn($j) => !isset($idsKonflik[$j['id']])));
        return ['bentrok'=>$bentrok, 'aman'=>$aman, 'idsKonflik'=>array_keys($idsKonflik)];
    }

    public function index()
    {
        $analisis = $this->dataAnalisis();
        return view('analisis.index', ['analisis'=>$analisis, 'total'=>count(JadwalData::all())]);
    }

    public function bentrok()
    {
        $analisis = $this->dataAnalisis();
        return view('analisis.bentrok', ['pasangan'=>$analisis['bentrok']]);
    }

    public function aman()
    {
        $analisis = $this->dataAnalisis();
        return view('analisis.aman', ['jadwals'=>$analisis['aman']]);
    }
}
