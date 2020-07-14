<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrolls', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->unsignedBigInteger('occupation_id')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('course_title_en')->nullable();
            $table->string('course_title_bn')->nullable();
            $table->unsignedBigInteger('course_id')->nullable();
            $table->string('schedule_title_en')->nullable();
            $table->string('schedule_title_bn')->nullable();
            $table->unsignedBigInteger('schedule_id')->nullable();
            $table->string('payment_title_en')->nullable();
            $table->string('payment_title_bn')->nullable();
            $table->unsignedBigInteger('payment_id')->nullable();
            $table->string('description_title_en')->nullable();
            $table->string('description_title_bn')->nullable();
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('enrolls');
    }
}
