<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
          'email' => env('ADMIN_EMAIL'),
          'password' => Hash::make(env('ADMIN_PASSWORD')),
      ]);
    }
}
