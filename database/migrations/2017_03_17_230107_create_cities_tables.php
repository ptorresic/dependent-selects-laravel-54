<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTables extends Migration
{
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('state_id')->unsigned();
            $table->string('name');
            $table->timestamps();

            $table->foreign('state_id')
                ->references('id')
                ->on('states')
                ->delete('cascade');
        });
    }
    public function down()
    {
        Schema::drop('cities');
    }
}
