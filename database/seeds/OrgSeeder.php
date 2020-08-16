<?php

use Illuminate\Database\Seeder;

class OrgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('org_settings')->insert([
          
          array(
            'type'  =>'type_logo',
            'value' =>1
          ),
          array(
            'type'  =>'type_name',
            'value' =>'Hasanik English'
          ),
          array(
            'type'  =>'type_footer',
            'value' =>'Hasanik English'
          ),
          array(
            'type'  =>'type_mail',
            'value' =>'admin@hasanik.com'
          ),
          array(
            'type'  =>'type_address',
            'value' =>'Daka'
          ),
          array(
            'type'  =>'type_fb',
            'value' =>'facebook.com'
          ),
          array(
            'type'  =>'type_tw',
            'value' =>'twitter.com'
          ),
          array(
            'type'  =>'type_number',
            'value' =>'01825731327'
          ),
          array(
            'type'  =>'type_google',
            'value' =>'google.com'
          ),
          array(
              'type'  =>'footer_logo',
              'value' =>1
          ),
          array(
              'type'  =>'favicon_icon',
              'value' =>1
          ),
          array(
              'type'  =>'type_youtube',
              'value' =>1
          ),
          array(
              'type'  =>'type_linked',
              'value' =>1
          ),
          array(
              'type'  =>'type_map',
              'value' =>1
          ),
          array(
              'type'  =>'primary_color',
              'value' =>'#282D56'
          ),
          array(
              'type'  =>'font_color',
              'value' =>'#1D1C1C'
          ),
          array(
              'type'  =>'pre_loader',
              'value' =>'black'
          ),
      ]);

    }
}


