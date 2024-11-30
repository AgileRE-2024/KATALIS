<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_surat',
        'nim',
        'is_active'
    ];
}
