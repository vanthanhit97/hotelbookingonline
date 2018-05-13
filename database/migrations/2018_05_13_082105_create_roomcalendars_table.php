<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomcalendarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roomcalendars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('availability');
            $table->integer('reservations');
            $table->date('day');
            $table->integer('bookings_id')->unsigned()->index();
            $table->foreign('bookings_id')
                    ->references('id')->on('bookings')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('roomcalendars');
    }
}
