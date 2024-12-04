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
        Schema::create('surats', function (Blueprint $table) {
            $table->id('id_surat');
            $table->string('filename')->nullable();
            $table->string('filepath')->nullable();
            $table->string('creator')->nullable();

            $table->string('prodi')->nullable();
            $table->string('doswal_name')->nullable();
            $table->date('wkt_start')->nullable();
            $table->date('wkt_end')->nullable();
            $table->string('koprodi_name')->nullable();
            $table->string('koprodi_nip')->nullable();
            $table->string('dosbing_name')->nullable();

            $table->string('surat_ditujukan_kepada')->nullable();
            $table->string('nama_lembaga')->nullable();
            $table->string('alamat')->nullable();
            $table->string('keperluan')->nullable();


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
        Schema::dropIfExists('surats');
    }
};
