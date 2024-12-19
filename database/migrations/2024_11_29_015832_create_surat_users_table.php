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
        Schema::create('surat_users', function (Blueprint $table) {
            $table->unsignedBigInteger('id_surat');
            // huruf besar huruf kecil? surat Surat
            $table->foreign('id_surat')->references('id_surat')->on('surats')->onUpdate('cascade')->onDelete('cascade');

            $table->string('nim');
            $table->foreign('nim')->references('nim')->on('users')->onUpdate('cascade')->onDelete('cascade');;

            $table->boolean('is_active');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_users');
    }
};
