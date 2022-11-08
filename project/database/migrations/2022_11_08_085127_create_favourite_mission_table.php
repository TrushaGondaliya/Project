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
        Schema::create('favourite_mission', function (Blueprint $table) {
            $table->bigInteger('favourite_mission_id')->unsigned()->primary()->autoIncrement();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('user_id')->on('user');
            $table->bigInteger('mission_id')->unsigned();
            $table->foreign('mission_id')->references('mission_id')->on('missions');
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
        Schema::dropIfExists('favourite_mission');
    }
};
