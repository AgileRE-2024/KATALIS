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
        Schema::create('dosen', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama dosen
            $table->string('nip')->unique(); // NIP yang unik
            $table->string('email')->unique();
            $table->string('password'); // Email yang unik
            $table->date('tanggal_lahir'); // Tanggal lahir
            $table->string('alamat_kantor'); // Alamat kantor
            $table->string('no_hp'); // Nomor HP
            $table->string('bidang_keahlian');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dosen');
    }
};
