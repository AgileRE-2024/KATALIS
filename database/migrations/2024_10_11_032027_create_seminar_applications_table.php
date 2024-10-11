<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('seminar_applications', function (Blueprint $table) {
            $table->id();
            $table->string('judul_pkl');
            $table->string('tempat_pkl');
            $table->string('dosen_pembimbing');
            $table->date('tanggal_seminar');
            $table->string('laporan_pkl'); // File path for laporan akhir PKL
            $table->string('bukti_persetujuan'); // File path for bukti persetujuan
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('seminar_applications');
    }
};
