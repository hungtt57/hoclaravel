<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            
            $table->string('title');

        });

            Schema::create('users', function (Blueprint $table) {
             $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();

        });

                Schema::create('notes', function (Blueprint $table) {
                $table->increments('id');
            $table->timestamps();

            $table->text('body');
            $table->integer('card_id')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
         Schema::drop('notes');
          Schema::drop('cards');
    }
}
