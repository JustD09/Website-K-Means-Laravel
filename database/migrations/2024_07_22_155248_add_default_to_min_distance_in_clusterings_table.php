<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDefaultToMinDistanceInClusteringsTable extends Migration
{
    public function up()
    {
        Schema::table('clusterings', function (Blueprint $table) {
            $table->float('min_distance')->default(0)->change();
        });
    }

    public function down()
    {
        Schema::table('clusterings', function (Blueprint $table) {
            $table->float('min_distance')->default(null)->change();
        });
    }
};

