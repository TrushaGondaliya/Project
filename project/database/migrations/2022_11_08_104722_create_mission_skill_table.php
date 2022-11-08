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
        Schema::create('mission_skill', function (Blueprint $table) {
            $table->bigInteger('mission_invite_id')->unsigned()->autoIncrement()->primary();
            $table->bigInteger('skill_id')->unsigned();
            $table->foreign('skill_id')->references('skill_id')->on('skill');
            $table->bigInteger('mission_id')->unsigned();
            $table->foreign('mission_id')->references('mission_id')->on('missions');
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();
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
        Schema::dropIfExists('mission_skill');
    }
};
