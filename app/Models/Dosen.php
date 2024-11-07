<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';

    protected $fillable = [
        'name',
        'nip',
        'email',
        'password',
        'tanggal_lahir',
        'alamat_kantor',
        'no_hp',
        'bidang_keahlian',
    ];

    protected $hidden = [
        'password',
    ];
}
