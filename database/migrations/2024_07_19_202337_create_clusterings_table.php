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
        Schema::create('clusterings', function (Blueprint $table) {
            $table->id();
            $table->float('distance_c1');
            $table->float('distance_c2');
            $table->float('distance_c3');
            $table->float('min_distance');
            $table->string('cluster', 2);
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
        Schema::dropIfExists('clusterings');
    }
};
