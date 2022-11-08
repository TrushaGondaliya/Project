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
        Schema::create('mission_media', function (Blueprint $table) {
            $table->bigInteger('mission_media_id')->unsigned()->autoIncrement()->primary();
            $table->bigInteger('mission_id')->unsigned();
            $table->foreign('mission_id')->references('mission_id')->on('missions');
            $table->string('media_name',64);
            $table->string('media_type',4);
            $table->string('media_path')->nullable();
            $table->enum('default',['0','1'])->default('0');
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
        Schema::dropIfExists('mission_media');
    }
};
