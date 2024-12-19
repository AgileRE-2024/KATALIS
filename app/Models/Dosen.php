<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Dosen extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $guard = 'dosen';

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

    public function mahasiswaBimbingan()
    {
        return $this->hasMany(User::class);
    }

    public function jadwalKonsultasi()
    {
        return $this->hasMany(JadwalKonsultasi::class);
    }
}
