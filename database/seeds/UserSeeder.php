<?php

use Illuminate\Database\Seeder;
use Hash;

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
          'name' => 'admin',
          'email' => 'admin@mail.com',
          'email_verified_at' => now(),
          'password' => Hash::make('12345678'), // password
          'remember_token' => Str::random(10),
        ]);

    }
}
