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
        Schema::defaultStringLength(191);
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('country_code', 3)->nullable();
            $table->string('phone', 10)->nullable();
            $table->enum('gender', ['male', 'female', 'other']);
            $table->enum('class_num', ['5', '7', 'other']);
            $table->string('email')->unique();
            $table->string('drivers_license')->nullable();
            $table->string('city')->nullable();
            $table->string('car_model')->nullable();
            $table->string('trim')->nullable();
            $table->string('make')->nullable();
            $table->string('plate_number')->nullable();
            $table->integer('num_passengers')->nullable();
            $table->string('car_image')->nullable();
            $table->string('license_plate_image')->nullable();
            $table->string('insurance_image')->nullable();

            $table->string('password');
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
