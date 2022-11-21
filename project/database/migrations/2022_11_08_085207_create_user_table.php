<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigInteger('user_id')->autoIncrement()->unsigned()->primary();
            $table->string('first_name',16)->nullable();
            $table->string('last_name',16)->nullable();
            $table->string('email',128);
            $table->string('password');
            $table->integer('phone_number');
            $table->string('avtar',2048)->nullable();
            $table->text('why_i_volunteer')->nullable();
            $table->string('employee_id',16)->nullable();
            $table->string('department',16)->nullable();
            $table->bigInteger('city_id')->unsigned();
            $table->foreign('city_id')->references('city_id')->on('city');
            $table->bigInteger('country_id')->unsigned();
            $table->foreign('country_id')->references('country_id')->on('country');
            $table->text('profile_text')->nullable();
            $table->string('linked_in_url')->nullable();
            $table->string('title')->nullable();
            $table->enum('status',['0','1'])->default('1');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
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
};
