<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PpdbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buat 10 data dummy
        for ($i = 1; $i <= 10; $i++) {
            DB::table('ppdbs')->insert([
                'nama_siswa' => 'Siswa ' . $i,
                'ttg_siswa' => 'Kota Dummy, 2000-01-01', // Ganti dengan tempat dan tanggal lahir yang sesuai
                'jenis_kelamin' => $i % 2 == 0 ? 'Laki-laki' : 'Perempuan',
                'nisn' => '123456789' . $i, // Contoh NISN dummy, bisa disesuaikan
                'alamat_siswa' => 'Alamat ' . $i, // Contoh alamat dummy, bisa disesuaikan
                'anak' => $i,
                'saudara' => $i + 1,
                'tlpn_siswa' => '08123456789' . $i, // Contoh nomor telepon dummy, bisa disesuaikan
                'nama_ayah' => 'Ayah ' . $i,
                'nama_ibu' => 'Ibu ' . $i,
                'alamat_ortu' => 'Alamat Orang Tua ' . $i, // Contoh alamat orang tua dummy, bisa disesuaikan
                'pekerjaan_ayah' => 'Pekerjaan Ayah ' . $i,
                'pekerjaan_ibu' => 'Pekerjaan Ibu ' . $i,
                'tlpn_ayah' => '0812345678' . ($i + 10), // Contoh nomor telepon ayah dummy, bisa disesuaikan
                'tlpn_ibu' => '0812345678' . ($i + 20), // Contoh nomor telepon ibu dummy, bisa disesuaikan
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
