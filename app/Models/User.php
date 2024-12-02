<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

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

    public function nim()
    {
        return $this->hasMany(SuratUser::class, 'nim', 'nim');
    }

    public function jadwalKonsultasi()
    {
        return $this->hasMany(JadwalKonsultasi::class);
    }

    public function logbooks()
    {
        return $this->hasMany(Logbook::class);
    }


    // Relasi dengan Seminar
    public function seminar()
{
    return $this->hasMany(SeminarApplication::class);
}

    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }
}

