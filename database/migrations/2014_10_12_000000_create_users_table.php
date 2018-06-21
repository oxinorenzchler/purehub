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
            $table->string('email')->unique();
            $table->string('mobile')->unique();
            $table->string('password');
            $table->string('birthdate');
            $table->string('address')->nullable();
            $table->string('work')->nullable();
            $table->string('bio')->nullable();
            $table->string('profile_picture')->nullable();
            $table->integer('role_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();

            // FK Roles
            $table->foreign('role_id')
            ->references('id')
            ->on('roles')
            ->onDelete('restrict')
            ->onUpdate('cascade');

            // FK Status
            $table->foreign('status_id')
            ->references('id')
            ->on('statuses')
            ->onDelete('restrict')
            ->onUpdate('cascade');
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
