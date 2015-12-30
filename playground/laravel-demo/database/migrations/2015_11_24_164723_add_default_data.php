<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDefaultData extends Migration
{
    /**
     * Run the migrations.
     * Adding default data
     *
     * @return void
     */
    public function up()
    {
        DB::table('users')->insert(
            array(
                'email' => 'madcabbage@gmail.com',
                'username' => 'Alistair Reynolds',
                'is_admin' => true,
                'password' => bcrypt('flobadob')
            )
        );

        DB::table('genres')->insert(array('name' => 'Sci-Fi &amp; Fantasy'));
        DB::table('genres')->insert(array('name' => 'Drama'));
        DB::table('genres')->insert(array('name' => 'Action'));
        DB::table('genres')->insert(array('name' => 'Adventure'));
        DB::table('genres')->insert(array('name' => 'Family'));
        DB::table('genres')->insert(array('name' => 'Crime'));
        DB::table('genres')->insert(array('name' => 'Thriller'));
        DB::table('genres')->insert(array('name' => 'Drama'));
        DB::table('genres')->insert(array('name' => 'Comedy'));
        DB::table('genres')->insert(array('name' => 'Horror'));
        DB::table('genres')->insert(array('name' => 'Romantic'));
        DB::table('genres')->insert(array('name' => 'Anime'));
        DB::table('genres')->insert(array('name' => 'Animation'));
        DB::table('genres')->insert(array('name' => 'Family'));
        DB::table('genres')->insert(array('name' => 'Musical'));
        DB::table('genres')->insert(array('name' => 'Western'));
        DB::table('genres')->insert(array('name' => 'Martial Arts'));
        DB::table('genres')->insert(array('name' => 'Documentary'));
        DB::table('genres')->insert(array('name' => 'Biography'));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //DB::table('users')->truncate();
        //DB::table('genres')->truncate();
    }
}
