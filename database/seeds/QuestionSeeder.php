<?php

use Illuminate\Database\Seeder;
use App\Models\FormQuestion;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      FormQuestion::create([
          'question_en_1'    => 'Please fill with your details.',
          'question_bn_1'    => 'আপনার বিবরণ পূরণ করুন',
          'question_en_2'    => 'What course do you want to do?',
          'question_bn_2'    => 'আপনি কোন কোর্স করতে চান?',
          'question_en_3'    => 'What is your preferable time schedule?',
          'question_bn_3'    => 'আপনার পছন্দের সময়সূচী কি?',
          'question_en_4'    => 'How do you want to pay for the course?',
          'question_bn_4'    => 'আপনি কোর্সের জন্য অর্থ প্রদান করতে চান?',
          'question_en_5'    => 'Write about yourself and why you want to do the course?(Write as much as possible.)',
          'question_bn_5'    => 'নিজের সম্পর্কে লিখুন এবং আপনি কোর্সটি কেন করতে চান? (যতটা সম্ভব লিখুন।)',
        ]);
    }
}
