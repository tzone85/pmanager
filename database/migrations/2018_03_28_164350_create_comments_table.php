<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if(!Schema::hasTable('users')){
            Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('body');
            $table->string('url', 255)->nullable();                      //a string pointing towards the work that they have doen for the day
            $table->integer('user_id')->unsigned();

//          Porlymorphic relationships under Eloquent Relationships

            $table->integer('commentable_id')->unsigned();
            $table->string('commentable_type');                                 // this one will contain the model

            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();
            });
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
