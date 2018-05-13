<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillPayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_pay', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bills_id')->unsigned()->index();
            $table->foreign('bills_id')
                    ->references('id')->on('bills')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->integer('ptypes_id')->unsigned()->index();
            $table->foreign('ptypes_id')
                    ->references('id')->on('paytypes')
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
        Schema::dropIfExists('bill_pay');
    }
}
