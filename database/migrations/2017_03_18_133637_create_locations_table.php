<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('city_id')->unsigned();
            $table->timestamps();

            $table->foreign('city_id')
                ->references('id')
                ->on('cities')
                ->delete('cascade');
        });
    }
    public function down()
    {
        Schema::drop('locations');
    }
}
