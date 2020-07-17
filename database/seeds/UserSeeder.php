<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      User::create([
          'name'              => 'admin',
          'email'             => 'admin@mail.com',
          'email_verified_at' => now(),
          'password'          => bcrypt('12345678'), // password
          'remember_token'    => Str::random(10),
        ]);

    }
}
