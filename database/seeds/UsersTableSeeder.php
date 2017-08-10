<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Bill Jenkins',
            'email' => 'bill@bill.com',
            'password' => bcrypt('raiders'),
        ]);

        User::create([
            'name' => 'Jerry Watkins',
            'email' => 'jerry@jerry.com',
            'password' => bcrypt('raiders'),
        ]);

        User::create([
            'name' => 'Jeff Jefferson',
            'email' => 'jeff@jeff.com',
            'password' => bcrypt('raiders'),
        ]);

    }
}
