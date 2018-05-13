<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');

            //khai báo khóa ngoại
            $table->integer('roles_id')->unsigned()->index();
            //khai báo quan hệ khóa ngoại - author_id
            $table->foreign('roles_id')
                ->references('id')->on('roles')
                ->onUpdate('cascade')   //cho phép update
                ->onDelete('cascade'); //cho phep delete
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
