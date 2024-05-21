<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'campaign_id',
        'nominal_donasi',
        'bukti_donasi',
        'nama_lengkap',
        'phone_email',
        'message',
        'status',
    ];

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }
}
