<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vote extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes', function(Blueprint $table){
            $table->bigIncrements('voteid')->unique();
            $table->bigInteger('stuid')->unsigned();
            $table->foreign('stuid')->references('stuid')->on('students');

            $table->bigInteger('v1')->unsigned()->nullable();
            $table->foreign('v1')->references('selid')->on('selections');
            $table->bigInteger('v2')->unsigned()->nullable();
            $table->foreign('v2')->references('selid')->on('selections');
            $table->bigInteger('v3')->unsigned()->nullable();
            $table->foreign('v3')->references('selid')->on('selections');
            $table->bigInteger('v4')->unsigned()->nullable();
            $table->foreign('v4')->references('selid')->on('selections');
            $table->date('created_at');
            $table->date('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('votes');
    }
}
