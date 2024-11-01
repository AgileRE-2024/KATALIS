<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKonsultasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal_konsultasi',
        'waktu_konsultasi',
        'topik', // Jika Anda ingin status juga bisa diisi secara massal
    ];
}
