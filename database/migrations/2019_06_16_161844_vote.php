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
            $table->bigIncrements('voteid');
            $table->index('studentid')->unsigned();
            $table->foreign('studentid')->references('stuid')->on('students')->onDelete('cascade');

            $table->index('v1')->unsigned();
            $table->foreign('v')->references('selid')->on('slelections')->onDelete('cascade');
            $table->index('v2')->unsigned();
            $table->foreign('v')->references('selid')->on('slelections')->onDelete('cascade');
            $table->index('v3')->unsigned();
            $table->foreign('v')->references('selid')->on('slelections')->onDelete('cascade');
            $table->index('v4')->unsigned();
            $table->foreign('v')->references('selid')->on('slelections')->onDelete('cascade');
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
