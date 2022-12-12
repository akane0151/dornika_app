<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('first_name',64);
            $table->string('last_name',64);
            $table->string('nationalId',10)->unique();
            $table->string('mobileNumber',11);
            $table->string('vState',11)->nullable();
            $table->string('gender',16);
            $table->date('birthDate')->nullable();
            $table->string('email',128);
            $table->string('username',32);
            $table->string('state',128)->nullable();
            $table->string('city',128)->nullable();
            $table->string('avatar',128)->nullable();
            $table->string('password');
            $table->boolean('verified')->default(false);
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
