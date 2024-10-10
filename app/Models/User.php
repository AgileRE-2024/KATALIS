<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nim',
        'program_studi',
        'alamat',
        'email',
        'tanggal_lahir',
        'no_hp',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
