<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTNormalisasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_normalisasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('dteday');
            $table->float('temp');
            $table->float('hum');
            $table->float('windspeed');
            $table->integer('weathersit');
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
        Schema::dropIfExists('t_normalisasi');
    }
}
