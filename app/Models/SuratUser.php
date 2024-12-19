<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class SuratUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_surat',
        'nim',
        'is_active'
    ];

    public $timestamps = false;

    public function surat(): BelongsTo
    {
        return $this->belongsTo(Surat::class, 'id_surat', 'id_surat');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'nim', 'nim');
    }
}
