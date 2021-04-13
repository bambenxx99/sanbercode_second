<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmHasCastTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film_has_cast', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('film_id');
            $table->unsignedBigInteger('cast_id');


            $table->foreign('film_id')->references('id')->on('film');
            $table->foreign('cast_id')->references('id')->on('cast');
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
        Schema::dropIfExists('film_has_cast');
    }
}
