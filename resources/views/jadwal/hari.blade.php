@extends('layouts.app')
@section('title','Jadwal '.$hari)
@section('content')<div class="page-head"><p class="eyebrow">PENYARINGAN JADWAL</p><h1>Jadwal Hari {{ ucfirst($hari) }}</h1><p>Jadwal perkuliahan yang berlangsung pada hari {{ strtolower($hari) }}.</p></div>
<div class="cards">@foreach($jadwals as $j)<article class="course"><span class="pill">{{ $j['kode'] }}</span><h3>{{ $j['matkul'] }}</h3><p>{{ $j['dosen'] }}</p><p>{{ $j['kelas'] }} · {{ $j['ruangan'] }}</p><b>{{ $j['mulai'] }} – {{ $j['selesai'] }}</b><a href="{{ route('jadwal.show',$j['id']) }}">Lihat detail →</a></article>@endforeach</div>
@endsection
