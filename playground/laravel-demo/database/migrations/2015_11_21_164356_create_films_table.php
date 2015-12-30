<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('released', 4);
            $table->string('imdb', 16);
            $table->string('trailer');
            $table->string('summary');
            $table->text('summary_full');
            $table->string('watch');
            $table->integer('added_by')->unsigned();
            $table->string('image');
            $table->timestamps();

            $table->foreign('added_by')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('films');
    }
}
