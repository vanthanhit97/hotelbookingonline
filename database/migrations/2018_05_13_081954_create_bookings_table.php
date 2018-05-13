<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->date('check_in');
            $table->date('check_out');                
            $table->integer('customers_id')->unsigned()->index();
            $table->foreign('customers_id')
                    ->references('id')->on('customers')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->integer('rooms_id')->unsigned()->index();
            $table->foreign('rooms_id')
                    ->references('id')->on('rooms')
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
        Schema::dropIfExists('bookings');
    }
}
