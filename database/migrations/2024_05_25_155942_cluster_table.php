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
        Schema::create('cluster', function (Blueprint $table) {
            $table->id();
            $table->string('nama_jalan');
            $table->string('panjang_jalan');
            $table->string('Deskripsi');
            $table->string('titik_kerusakan');
            $table->string('lebar_kerusakan');
            $table->string('Status');
            $table->string('categories');
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
        Schema::dropIfExists('cluster');
    }
};
