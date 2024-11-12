<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_konsultasis', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_konsultasi');
            $table->time('waktu_konsultasi');
            $table->string('topik');
            $table->string('status')->default('Menunggu Persetujuan'); // status default
            $table->timestamps();
            $table->string('hasil_bimbingan')->nullable();
            $table->string('dokumentasi_bimbingan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal_konsultasis');
    }
};
