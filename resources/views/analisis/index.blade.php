@extends('layouts.app')
@section('title','Hasil Analisis')
@section('content')<div class="page-head"><p class="eyebrow">MESIN PEMERIKSA JADWAL</p><h1>Hasil Analisis Bentrok</h1><p>Sistem membandingkan setiap pasangan jadwal pada hari yang sama dan memeriksa tiga sumber konflik.</p></div>
<div class="stats"><div class="stat"><small>Jadwal diperiksa</small><strong>{{ $total }}</strong><span>Seluruh data</span></div><div class="stat danger"><small>Pasangan bentrok</small><strong>{{ count($analisis['bentrok']) }}</strong><span>Konflik terdeteksi</span></div><div class="stat success"><small>Jadwal aman</small><strong>{{ count($analisis['aman']) }}</strong><span>Tidak terlibat konflik</span></div></div>
<div class="cards"><a class="action-card" href="{{ route('analisis.bentrok') }}"><span>⚠️</span><h3>Lihat jadwal bentrok</h3><p>Periksa pasangan jadwal beserta penyebab konfliknya.</p><b>Buka hasil →</b></a><a class="action-card" href="{{ route('analisis.aman') }}"><span>✓</span><h3>Lihat jadwal aman</h3><p>Periksa jadwal yang tidak terlibat konflik.</p><b>Buka hasil →</b></a></div>
<div class="note"><b>Aturan pemeriksaan:</b> dua jadwal dianggap bertabrakan jika hari sama dan waktu saling tumpang tindih, kemudian memiliki ruangan, dosen, atau kelas yang sama.</div>
@endsection
