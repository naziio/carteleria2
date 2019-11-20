<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailyProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_programs', function (Blueprint $table) {
            $table->bigIncrements('id_dp');
            $table->unsignedInteger('voyages_id_voyage');
            $table->unsignedInteger('publications_id_pub');
            $table->string('title_en');
            $table->time('hour');
            $table->date('date');
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
        Schema::dropIfExists('daily_programs');
    }
}
