<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Selection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selections', function(Blueprint $table){
            $table->bigIncrements('selid')->unique();
            $table->string('name');
            $table->string('age');
            $table->string('email');
            $table->string('address');
            $table->string('hobby');
            $table->string('description');
            $table->string('fblink');
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
        Schema::dropIfExists('selections');
    }
}
