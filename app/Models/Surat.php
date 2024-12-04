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
        
        'prodi',
        'doswal_name',
        'wkt_start',
        'wkt_end',
        'koprodi_name',
        'koprodi_nip',
        'dosbing_name',

        'surat_ditujukan_kepada',
        'nama_lembaga',
        'alamat',
        'keperluan',
    ];

    public function id_surat()
    {
        return $this->hasMany(SuratUser::class, 'id_surat', 'id_surat');
    }


}
