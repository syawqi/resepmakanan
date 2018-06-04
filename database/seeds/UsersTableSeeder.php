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
        $user = new \App\User();

        $user->name = 'Admin';
        $user->email = 'hello@gmail.com';
        $user->password = bcrypt('asdasd');

        $user->save();
    }
}
