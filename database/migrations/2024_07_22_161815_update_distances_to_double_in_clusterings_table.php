<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateDistancesToDoubleInClusteringsTable extends Migration
{
    public function up()
    {
        Schema::table('clusterings', function (Blueprint $table) {
            $table->double('distance_c1', 15, 8)->change();
            $table->double('distance_c2', 15, 8)->change();
            $table->double('distance_c3', 15, 8)->change();
            $table->double('min_distance', 15, 8)->change();
        });
    }

    public function down()
    {
        Schema::table('clusterings', function (Blueprint $table) {
            $table->float('distance_c1')->change();
            $table->float('distance_c2')->change();
            $table->float('distance_c3')->change();
            $table->float('min_distance')->change();
        });
    }
}

