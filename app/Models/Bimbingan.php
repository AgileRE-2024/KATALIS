<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bimbingan extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal_bimbingan',
        'hasil_bimbingan',
        'dokumentasi_bimbingan',
    ];
}
