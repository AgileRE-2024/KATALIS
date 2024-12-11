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

    const STATUS_MENUNGGU = 'Waiting Approval';
    const STATUS_DISETUJUI = 'Approved';
    const STATUS_DITOLAK = 'Revised';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }
}
