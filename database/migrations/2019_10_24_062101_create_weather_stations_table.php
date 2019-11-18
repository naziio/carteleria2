<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeatherStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weather_stations', function (Blueprint $table) {
            $table->bigIncrements('id_ws');
            $table->unsignedInteger('voyages_id_voyage');
            $table->string('latitude');
            $table->string('longitude');
            $table->integer('temperature');
            $table->string('wind');
            $table->dateTime('date');
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
        Schema::dropIfExists('weather_stations');
    }
}
