<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeminarApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_pkl',
        'tempat_pkl',
        'dosen_pembimbing',
        'tanggal_seminar',
        'laporan_pkl',
        'bukti_persetujuan',
    ];
}
