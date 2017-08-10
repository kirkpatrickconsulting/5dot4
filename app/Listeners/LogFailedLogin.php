<?php

namespace App\Listeners;
use Illuminate\Auth\Events\Failed;
use Log;

class LogFailedLogin
{
    public function __construct() {

    }

    /**
     * Handle the event.
     *
     * @param  Failed  $event
     * @return void
     */
    public function handle(Failed $event)
    {
        $email = $event->user->email;
        Log::info('Login Failed: '.$email);
    }
}