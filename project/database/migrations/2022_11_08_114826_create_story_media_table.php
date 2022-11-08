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
        Schema::create('story_media', function (Blueprint $table) {
            $table->bigInteger('story_media_id')->unsigned()->autoIncrement()->primary();
            $table->bigInteger('story_id')->unsigned();
            $table->foreign('story_id')->references('story_id')->on('story');
            $table->string('type',8);
            $table->text('path');
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
        Schema::dropIfExists('story_media');
    }
};
