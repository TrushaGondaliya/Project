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
        Schema::create('user_skill', function (Blueprint $table) {
            $table->bigInteger('user_skill_id')->unsigned()->autoIncrement()->primary();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('user_id')->on('user');
            $table->bigInteger('skill_id')->unsigned()->nullable();
            $table->foreign('skill_id')->references('skill_id')->on('skill');
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
        Schema::dropIfExists('user_skill');
    }
};
