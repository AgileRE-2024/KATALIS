<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Surat extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_surat',
        'filename',
        'filepath',
        'creator',
    ];

    public function id_surat()
    {
        return $this->hasMany(SuratUser::class, 'id_surat', 'id_surat');
    }


}
