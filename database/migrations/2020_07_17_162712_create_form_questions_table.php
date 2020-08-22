<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_questions', function (Blueprint $table) {
            $table->id();
            $table->longText('question_en_1')->nullable();
            $table->longText('question_bn_1')->nullable();
            $table->longText('question_en_2')->nullable();
            $table->longText('question_bn_2')->nullable();
            $table->longText('question_en_3')->nullable();
            $table->longText('question_bn_3')->nullable();
            $table->longText('question_en_4')->nullable();
            $table->longText('question_bn_4')->nullable();
            $table->longText('question_en_5')->nullable();
            $table->longText('question_bn_5')->nullable();
            $table->longText('question_en_6')->nullable();
            $table->longText('question_bn_6')->nullable();
            $table->longText('question_en_7')->nullable();
            $table->longText('question_bn_7')->nullable();
            $table->longText('question_en_8')->nullable();
            $table->longText('question_bn_8')->nullable();
            $table->longText('question_en_9')->nullable();
            $table->longText('question_bn_9')->nullable();
            $table->longText('question_en_10')->nullable();
            $table->longText('question_bn_10')->nullable();
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
        Schema::dropIfExists('form_questions');
    }
}
