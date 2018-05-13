<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomtypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roomtypes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('short_name',10);
            $table->float('base_price');
            $table->integer('base_availability');
            $table->integer('max_occupancy');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roomtypes');
    }
}
