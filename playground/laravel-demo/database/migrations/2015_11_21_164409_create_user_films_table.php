<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_films', function(Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('film_id')->unsigned();
            $table->boolean('watched');
            $table->timestamp('updated_at');
            $table->primary(array('user_id', 'film_id'));   // adding composite key

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->foreign('film_id')
                ->references('id')->on('films')
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
        Schema::drop('user_films');
    }
}
