<?php

namespace App\Data;

/** Data contoh disimpan dalam array PHP sesuai ketentuan UTS (tanpa database). */
class JadwalData
{
    public static function all(): array
    {
        return [
            ['id'=>1, 'kode'=>'PTI501', 'matkul'=>'Pemrograman Internet', 'dosen'=>'Taofik Muhammad, M.Kom', 'kelas'=>'PTI 5A', 'hari'=>'Senin', 'mulai'=>'08:00', 'selesai'=>'10:00', 'ruangan'=>'Lab Komputer 1'],
            ['id'=>2, 'kode'=>'PTI502', 'matkul'=>'Basis Data', 'dosen'=>'Rina Marlina, M.Kom', 'kelas'=>'PTI 5A', 'hari'=>'Senin', 'mulai'=>'09:00', 'selesai'=>'11:00', 'ruangan'=>'Ruang 201'],
            ['id'=>3, 'kode'=>'PTI503', 'matkul'=>'Jaringan Komputer', 'dosen'=>'Dedi Kurniawan, M.T', 'kelas'=>'PTI 5B', 'hari'=>'Senin', 'mulai'=>'08:00', 'selesai'=>'10:00', 'ruangan'=>'Lab Komputer 1'],
            ['id'=>4, 'kode'=>'PTI504', 'matkul'=>'Evaluasi Pendidikan', 'dosen'=>'Siti Nurhayati, M.Pd', 'kelas'=>'PTI 5A', 'hari'=>'Senin', 'mulai'=>'13:00', 'selesai'=>'15:00', 'ruangan'=>'Ruang 202'],
            ['id'=>5, 'kode'=>'PTI505', 'matkul'=>'Desain Web', 'dosen'=>'Taofik Muhammad, M.Kom', 'kelas'=>'PTI 5B', 'hari'=>'Selasa', 'mulai'=>'08:00', 'selesai'=>'10:00', 'ruangan'=>'Lab Komputer 2'],
            ['id'=>6, 'kode'=>'PTI506', 'matkul'=>'Sistem Informasi Manajemen', 'dosen'=>'Rina Marlina, M.Kom', 'kelas'=>'PTI 5A', 'hari'=>'Selasa', 'mulai'=>'10:00', 'selesai'=>'12:00', 'ruangan'=>'Ruang 201'],
            ['id'=>7, 'kode'=>'PTI507', 'matkul'=>'Microteaching', 'dosen'=>'Agus Setiawan, M.Pd', 'kelas'=>'PTI 5B', 'hari'=>'Selasa', 'mulai'=>'10:00', 'selesai'=>'12:00', 'ruangan'=>'Ruang 202'],
            ['id'=>8, 'kode'=>'PTI508', 'matkul'=>'Etika Profesi', 'dosen'=>'Siti Nurhayati, M.Pd', 'kelas'=>'PTI 5A', 'hari'=>'Rabu', 'mulai'=>'08:00', 'selesai'=>'10:00', 'ruangan'=>'Ruang 201'],
            ['id'=>9, 'kode'=>'PTI509', 'matkul'=>'Pemrograman Berorientasi Objek', 'dosen'=>'Dedi Kurniawan, M.T', 'kelas'=>'PTI 5B', 'hari'=>'Rabu', 'mulai'=>'08:30', 'selesai'=>'10:30', 'ruangan'=>'Lab Komputer 2'],
            ['id'=>10, 'kode'=>'PTI510', 'matkul'=>'Media Pembelajaran', 'dosen'=>'Agus Setiawan, M.Pd', 'kelas'=>'PTI 5A', 'hari'=>'Rabu', 'mulai'=>'10:00', 'selesai'=>'12:00', 'ruangan'=>'Ruang 202'],
            ['id'=>11, 'kode'=>'PTI511', 'matkul'=>'Pendidikan Inklusif', 'dosen'=>'Siti Nurhayati, M.Pd', 'kelas'=>'PTI 5B', 'hari'=>'Kamis', 'mulai'=>'08:00', 'selesai'=>'10:00', 'ruangan'=>'Ruang 203'],
            ['id'=>12, 'kode'=>'PTI512', 'matkul'=>'Keamanan Jaringan', 'dosen'=>'Dedi Kurniawan, M.T', 'kelas'=>'PTI 5A', 'hari'=>'Kamis', 'mulai'=>'08:00', 'selesai'=>'10:00', 'ruangan'=>'Lab Komputer 1'],
            ['id'=>13, 'kode'=>'PTI513', 'matkul'=>'Metodologi Penelitian', 'dosen'=>'Rina Marlina, M.Kom', 'kelas'=>'PTI 5B', 'hari'=>'Kamis', 'mulai'=>'13:00', 'selesai'=>'15:00', 'ruangan'=>'Ruang 201'],
            ['id'=>14, 'kode'=>'PTI514', 'matkul'=>'Praktik Pemrograman', 'dosen'=>'Taofik Muhammad, M.Kom', 'kelas'=>'PTI 5A', 'hari'=>'Jumat', 'mulai'=>'08:00', 'selesai'=>'10:00', 'ruangan'=>'Lab Komputer 2'],
            ['id'=>15, 'kode'=>'PTI515', 'matkul'=>'Statistika Pendidikan', 'dosen'=>'Agus Setiawan, M.Pd', 'kelas'=>'PTI 5B', 'hari'=>'Jumat', 'mulai'=>'08:00', 'selesai'=>'10:00', 'ruangan'=>'Ruang 202'],
            ['id'=>16, 'kode'=>'PTI516', 'matkul'=>'Interaksi Manusia dan Komputer', 'dosen'=>'Rina Marlina, M.Kom', 'kelas'=>'PTI 5A', 'hari'=>'Jumat', 'mulai'=>'10:00', 'selesai'=>'12:00', 'ruangan'=>'Ruang 201'],
            ['id'=>17, 'kode'=>'PTI517', 'matkul'=>'Pengantar Teknologi Informasi', 'dosen'=>'Budi Santoso, M.Kom', 'kelas'=>'PTI 5B', 'hari'=>'Senin', 'mulai'=>'10:00', 'selesai'=>'12:00', 'ruangan'=>'Ruang 203'],
            ['id'=>18, 'kode'=>'PTI518', 'matkul'=>'Praktik Basis Data', 'dosen'=>'Budi Santoso, M.Kom', 'kelas'=>'PTI 5A', 'hari'=>'Selasa', 'mulai'=>'13:00', 'selesai'=>'15:00', 'ruangan'=>'Lab Komputer 1'],
        ];
    }
}
