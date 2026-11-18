<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Deteksi Bentrok Jadwal')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<header class="topbar"><div class="brand">SIBER<span>JADWAL</span></div><nav>
<a href="{{ route('dashboard') }}">Beranda</a><a href="{{ route('jadwal.index') }}">Data Jadwal</a><a href="{{ route('analisis.index') }}">Analisis</a><a href="{{ route('ringkasan') }}">Ringkasan</a><a href="{{ route('tentang') }}">Tentang</a>
</nav></header>
<main class="container">@yield('content')</main>
<footer>© 2026 Sistem Deteksi Bentrok Jadwal Perkuliahan · Proyek UTS Pemrograman Internet</footer>
</body></html>
