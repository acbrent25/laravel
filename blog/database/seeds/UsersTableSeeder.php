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
        //
        $user = App\User::create([
          'name' => 'Adam Champagne',
          'email' => 'adam@champagne.me',
          'password' => bcrypt('password'),
          'admin' => 1
        ]);

        App\Profile::create([
          'user_id' => $user->id,
          'avatar'  => 'uploads/avatars/1.jpg',
          'about'   => 'Bacon ipsum dolor amet landjaeger turducken pastrami kielbasa ham hock spare ribs. Short loin pork chop ribeye brisket capicola pig. Tail picanha rump jerky t-bone kielbasa. Pastrami corned beef chicken, tail boudin ground round biltong cupim beef ribs frankfurter pork belly tongue spare ribs ball tip meatloaf.d',
          'facebook' => 'facebook.com',
          'youtube' => 'youtube.com'
        ]);
    }
}
