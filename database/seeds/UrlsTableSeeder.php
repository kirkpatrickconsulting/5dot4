<?php

use Illuminate\Database\Seeder;
use App\Url;

/**
 * Class UrlsTableSeeder
 */
class UrlsTableSeeder extends Seeder
{

    /**
     *
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
