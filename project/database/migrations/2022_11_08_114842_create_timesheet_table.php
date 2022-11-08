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
        Schema::create('timesheet', function (Blueprint $table) {
            $table->bigInteger('timesheet_id')->unsigned()->autoIncrement()->primary();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('user_id')->on('user');
            $table->bigInteger('mission_id')->unsigned()->nullable();
            $table->foreign('mission_id')->references('mission_id')->on('missions');
            $table->time('time')->nullable();
            $table->integer('action')->nullable();
            $table->dateTime('date_volunteered');
            $table->text('notes')->nullable();
            $table->enum('status',['APPROVED','DECLINED','SUBMIT_FOR_APPROVAL','PENDNG']);
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
        Schema::dropIfExists('timesheet');
    }
};
