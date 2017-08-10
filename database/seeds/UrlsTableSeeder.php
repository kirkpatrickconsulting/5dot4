<?php

use Illuminate\Database\Seeder;
use App\Url;

class UrlsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Url::create([
            'name' => 'CNN',
            'link' => 'http://www.cnn.com',
            'panel' => 'test',
        ]);

        Url::create([
            'name' => 'ESPN',
            'link' => 'http://www.espn.com',
            'panel' => 'test',
        ]);

        Url::create([
            'name' => 'Daily Mail',
            'link' => 'http://www.dailymail.co.uk',
            'panel' => 'test',
        ]);

        Url::create([
            'name' => 'Reddit',
            'link' => 'http://www.reddit.com',
            'panel' => 'test',
        ]);

    }
}
