<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'name' => 'Adam Champagne',
            'email' => 'adam@champagne.me',
            'password' => bcrypt('password'),
            'admin' => 1
          ]);
  
    }
}
