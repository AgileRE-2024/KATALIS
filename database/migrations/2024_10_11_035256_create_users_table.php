<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Pastikan kolom ini ada
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nim')->unique();
            $table->string('program_studi');
            $table->string('alamat');
            $table->string('no_hp');
            $table->date('tanggal_lahir');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};
