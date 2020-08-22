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
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->unsignedBigInteger('occupation_id')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->unsignedBigInteger('course_id')->nullable();
            $table->double('course_price')->nullable();
            $table->unsignedBigInteger('schedule_id')->nullable();
            $table->unsignedBigInteger('payment_id')->nullable();
            $table->longText('description')->nullable();
            $table->string('guardian_phone')->nullable();
            $table->enum('study_level',['SSC','HSC','JSC','PSC','HONORS','MASTERS'])->nullable();
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
