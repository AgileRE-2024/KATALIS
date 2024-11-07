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
        Schema::create('koordinators', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama koordinator
            $table->string('nip')->unique(); // NIP yang unik
            $table->string('email')->unique(); // Email yang unik
            $table->string('password'); // Password
            $table->date('tanggal_lahir'); // Tanggal lahir
            $table->string('alamat_kantor'); // Alamat kantor
            $table->string('no_hp'); // Nomor HP
            $table->string('bidang_keahlian'); // Bidang keahlian
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
        Schema::dropIfExists('koordinators');
    }
};