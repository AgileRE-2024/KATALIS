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
        'status',
        'hasil_bimbingan',
        'dokumentasi_bimbingan',
    ];

    const STATUS_MENUNGGU = 'Menunggu Persetujuan';
    const STATUS_DISETUJUI = 'Disetujui';
    const STATUS_DITOLAK = 'Ditolak';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
