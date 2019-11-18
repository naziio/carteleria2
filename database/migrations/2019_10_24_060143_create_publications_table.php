<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->bigIncrements('id_pub');
            $table->unsignedInteger('voyages_id_voyage');
            $table->integer('difficulty')->default(3);
            $table->string('image_map');
            $table->string('image_map_2');
            $table->string('description_en');
            $table->string('title_en');
            $table->dateTime('realization_date');
            $table->boolean('active')->default(1);
            $table->unsignedInteger('types_id_type');
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
        Schema::dropIfExists('publications');
    }
}
