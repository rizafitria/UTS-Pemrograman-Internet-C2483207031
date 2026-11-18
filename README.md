# Sistem Deteksi Bentrok Jadwal Perkuliahan

**Proyek UTS Pemrograman Internet – Laravel**  
Nama: [Isi nama lengkap]  
NIM: [Isi NIM]  
Kelas: PTI 5  
Tema: Sistem Deteksi Bentrok Jadwal Perkuliahan

## 1. Deskripsi masalah
Program studi dapat mengalami bentrok ketika dua mata kuliah dijadwalkan pada waktu yang sama. Konflik dapat terjadi karena ruangan dipakai bersamaan, dosen mengajar dua kelas sekaligus, atau satu kelas memiliki dua mata kuliah pada waktu yang bertumpang tindih.

Aplikasi ini menampilkan data jadwal, detail jadwal, penyaringan berdasarkan hari/kelas, serta hasil deteksi konflik secara otomatis.

## 2. Teknologi dan struktur MVC
- **Model/data:** `app/Data/JadwalData.php` menyediakan 18 data jadwal dalam array PHP. Tidak menggunakan database.
- **Routing:** `routes/web.php` menghubungkan URL dengan method Controller. Terdapat 9 route.
- **Controller:** `DashboardController`, `JadwalController`, dan `AnalisisController` menangani tampilan, filter, detail, dan perhitungan konflik.
- **View:** Blade di `resources/views` menampilkan halaman beranda, daftar, detail, jadwal per hari, analisis, jadwal bentrok, jadwal aman, ringkasan, dan tentang.
- **Layout Blade:** halaman menggunakan `@extends`, `@section`, `@yield`, `@foreach`, `@forelse`, `@if`/percabangan terkait tampilan.

## 3. Logika deteksi bentrok
Jam dikonversi menjadi menit: `jam * 60 + menit`. Dua jadwal hanya dibandingkan jika hari keduanya sama. Rentang waktu bertumpang tindih jika:

```php
$mulaiA < $selesaiB && $mulaiB < $selesaiA
```

Jika waktu bertumpang tindih, sistem memeriksa tiga kondisi:
1. Nama ruangan sama → konflik ruangan.
2. Nama dosen sama → konflik dosen.
3. Nama kelas sama → konflik kelas.

Jika satu atau lebih kondisi terpenuhi, pasangan jadwal ditampilkan bersama alasan konflik. Jadwal yang tidak masuk ke pasangan konflik dimasukkan ke daftar jadwal aman.

## 4. Daftar route
| URL | Fungsi |
|---|---|
| `/` | Dashboard |
| `/jadwal` | Daftar dan filter jadwal |
| `/jadwal/hari/{hari}` | Jadwal berdasarkan hari |
| `/jadwal/{id}` | Detail jadwal berdasarkan ID |
| `/analisis` | Ringkasan analisis |
| `/analisis/bentrok` | Daftar pasangan konflik |
| `/analisis/aman` | Daftar jadwal aman |
| `/ringkasan` | Ringkasan jumlah jadwal dan konflik |
| `/tentang` | Informasi aplikasi |

## 5. Cara memasang pada Laravel
Pastikan PHP, Composer, dan Laravel sudah terpasang. Buat proyek Laravel baru:

```bash
composer create-project laravel/laravel deteksi-jadwal
cd deteksi-jadwal
```

Salin folder dan file dari paket proyek ini ke folder proyek Laravel dengan mempertahankan strukturnya (`app`, `routes`, `resources`, dan `public`). Jika diminta, izinkan file yang sama untuk diganti, khususnya `routes/web.php`.

Jalankan aplikasi:

```bash
php artisan serve
```

Buka `http://127.0.0.1:8000` pada browser. Tidak perlu membuat database atau menjalankan migration karena data menggunakan array PHP.

## 6. Screenshot aplikasi
Simpan minimal tiga screenshot hasil aplikasi ke folder `screenshots/`, misalnya:
- `01-dashboard.png` – halaman utama.
- `02-daftar-jadwal.png` – daftar jadwal perkuliahan.
- `03-hasil-bentrok.png` – hasil deteksi bentrok.

Setelah screenshot dibuat, tampilkan di bagian ini agar terlihat langsung di GitHub:

```markdown
![Dashboard](screenshots/01-dashboard.png)
![Daftar Jadwal](screenshots/02-daftar-jadwal.png)
![Hasil Deteksi Bentrok](screenshots/03-hasil-bentrok.png)
```

## 7. Pengumpulan GitHub
1. Isi nama dan NIM pada README serta halaman Tentang.
2. Jalankan aplikasi dan pastikan semua halaman dapat dibuka.
3. Ambil minimal tiga screenshot dan simpan di folder `screenshots/`.
4. Upload seluruh source code ke repository GitHub dengan status **Public**.
5. Kirim link repository GitHub melalui Edlink.

> Data jadwal di dalam proyek ini adalah data simulasi untuk demonstrasi. Sesuaikan identitas mahasiswa sebelum dikumpulkan.
