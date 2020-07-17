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
            $table->longText('question_en_1');
            $table->longText('question_bn_1');
            $table->longText('question_en_2');
            $table->longText('question_bn_2');
            $table->longText('question_en_3');
            $table->longText('question_bn_3');
            $table->longText('question_en_4');
            $table->longText('question_bn_4');
            $table->longText('question_en_5');
            $table->longText('question_bn_5');
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
