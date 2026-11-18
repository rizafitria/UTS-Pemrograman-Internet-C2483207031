@extends('layouts.app')
@section('title','Beranda | Siber Jadwal')
@section('content')
<section class="hero"><div><p class="eyebrow">SISTEM INFORMASI AKADEMIK</p><h1>Jadwal tertata,<br><span>perkuliahan lancar.</span></h1><p>Periksa jadwal perkuliahan dan temukan konflik ruangan, dosen, maupun kelas secara otomatis.</p><a class="btn" href="{{ route('analisis.index') }}">Lihat hasil analisis →</a></div><div class="hero-art">📅<small>JADWAL • ANALISIS • SOLUSI</small></div></section>
<div class="stats"><div class="stat"><small>Total jadwal</small><strong>{{ $totalJadwal }}</strong><span>Data perkuliahan</span></div><div class="stat danger"><small>Pasangan konflik</small><strong>{{ $totalKonflik }}</strong><span>Perlu diperiksa</span></div><div class="stat success"><small>Jadwal aman</small><strong>{{ $totalAman }}</strong><span>Tidak terlibat konflik</span></div></div>
<div class="section-head"><div><p class="eyebrow">DATA PERKULIAHAN</p><h2>Jadwal contoh</h2></div><a href="{{ route('jadwal.index') }}">Lihat semua →</a></div>
<div class="table-wrap"><table><thead><tr><th>Mata kuliah</th><th>Dosen</th><th>Kelas</th><th>Hari</th><th>Waktu</th><th></th></tr></thead><tbody>@foreach($jadwalTerbaru as $j)<tr><td><b>{{ $j['matkul'] }}</b><small>{{ $j['kode'] }}</small></td><td>{{ $j['dosen'] }}</td><td>{{ $j['kelas'] }}</td><td>{{ $j['hari'] }}</td><td>{{ $j['mulai'] }}–{{ $j['selesai'] }}</td><td><a href="{{ route('jadwal.show',$j['id']) }}">Detail</a></td></tr>@endforeach</tbody></table></div>
@endsection
