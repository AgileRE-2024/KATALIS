<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKonsultasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'tanggal_konsultasi',
        'waktu_konsultasi',
        'topik', 
        'hasil_bimbingan',
        'dokumentasi_bimbingan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
