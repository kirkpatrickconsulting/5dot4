<?php

use Illuminate\Database\Seeder;
use App\User;


/**
 * Class UsersTableSeeder
 */
class UsersTableSeeder extends Seeder
{

    /**
     *
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
