<?php

use Illuminate\Database\Seeder;

/**
 * Class DatabaseSeeder
 */
class DatabaseSeeder extends Seeder
{

    /**
     *
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(UrlsTableSeeder::class);
    }
}
