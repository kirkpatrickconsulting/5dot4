<?php

namespace App\Listeners;
use Illuminate\Auth\Events\Lockout;
use Log;

class LogLockout
{
    public function __construct() {

    }

    /**
     * Handle the event.
     *
     * @param  Lockout  $event
     * @return void
     */
    public function handle(Lockout $event)
    {
        $email = $event->user->email;
        Log::info('Login Lockout: '.$email);
    }
}