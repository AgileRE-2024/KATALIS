<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koordinator extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'nim',
        'program_studi',
        'alamat',
        'no_hp',
        'tanggal_lahir',
    ];

    protected $hidden = [
        'password',
    ];
}
