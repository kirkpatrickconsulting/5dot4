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
            'user_id' => '1',
            'title' => 'CNN',
            'url' => 'http://www.cnn.com',
            'description' => 'CNN',
            'panel' => '1',
        ]);

        Url::create([
            'user_id' => '1',
            'title' => 'ESPN',
            'url' => 'http://www.espn.com',
            'description' => 'ESPN',
            'panel' => '1',
        ]);

        Url::create([
            'user_id' => '1',
            'title' => 'Daily Mail',
            'url' => 'http://www.dailymail.co.uk',
            'description' => 'Daily Mail',
            'panel' => '1',
        ]);

        Url::create([
            'user_id' => '1',
            'title' => 'Reddit',
            'url' => 'http://www.reddit.com',
            'description' => 'Reddit',
            'panel' => '1',
        ]);

    }
}
