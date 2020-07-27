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
            'value' =>1
          ),
          array(
            'type'  =>'type_footer',
            'value' =>1
          ),
          array(
            'type'  =>'type_mail',
            'value' =>1
          ),
          array(
            'type'  =>'type_address',
            'value' =>1
          ),
          array(
            'type'  =>'type_fb',
            'value' =>1
          ),
          array(
            'type'  =>'type_tw',
            'value' =>1
          ),
          array(
            'type'  =>'type_number',
            'value' =>1
          ),
          array(
            'type'  =>'type_google',
            'value' =>1
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
              'value' =>'blue'
          ),
          array(
              'type'  =>'f_color',
              'value' =>'black'
          ),
      ]);

    }
}


