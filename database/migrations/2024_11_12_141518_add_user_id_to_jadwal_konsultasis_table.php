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
        Schema::table('jadwal_konsultasis', function (Blueprint $table) {
            // Menambahkan kolom user_id
            $table->foreignId('user_id')->after('id')->constrained('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jadwal_konsultasis', function (Blueprint $table) {
            // Menghapus kolom user_id jika migrasi dibatalkan
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
};
