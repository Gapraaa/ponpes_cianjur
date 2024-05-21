<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_siswa',
        'ttg_siswa',
        'jenis_kelamin',
        'nisn',
        'alamat_siswa',
        'anak',
        'saudara',
        'tlpn_siswa',
        'nama_ayah',
        'nama_ibu',
        'alamat_ortu',
        'pekerjaan_ayah',
        'pekerjaan_ibu',
        'tlpn_ayah',
        'tlpn_ibu',
    ];
}
