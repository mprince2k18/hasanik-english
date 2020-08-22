<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormHelpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_helps', function (Blueprint $table) {
            $table->id();
            $table->longText('tips1');
            $table->longText('tips2');
            $table->longText('tips3');
            $table->longText('tips4');
            $table->longText('tips5');
            $table->longText('tips6');
            $table->longText('tips7');
            $table->longText('tips8');
            $table->longText('tips9');
            $table->longText('tips10');
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
        Schema::dropIfExists('form_helps');
    }
}
