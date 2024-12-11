<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $guard = 'web';

    protected $fillable = [
        'dosen_id',
        'name',
        'username',
        'email',
        'password',
        'nim',
        'program_studi',
        'alamat',
        'no_hp',
        'tanggal_lahir',
        'proposal_pkl',
        'surat_penerimaan'
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
        return $this->belongsTo(Dosen::class, 'dosen_id', 'id');
    }

    public function surats()
    {
        return $this->belongsToMany(Surat::class, 'surat_users', 'nim', 'id_surat')
                    ->using(SuratUser::class); 
    }


}

