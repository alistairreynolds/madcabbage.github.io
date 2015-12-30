<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genres', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('film_genre', function (Blueprint $table){
            $table->integer('film_id')->unsigned()->index();
            $table->foreign('film_id')
                  ->references('id')->on('films')
                  ->onDelete('cascade');

            $table->integer('genre_id')->unsigned()->index();
            $table->foreign('genre_id')
                  ->references('id')->on('genres')
                  ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('film_genre');
        Schema::drop('genres');
    }
}
