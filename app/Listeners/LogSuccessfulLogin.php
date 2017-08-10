<?php

namespace App\Listeners;
use Illuminate\Auth\Events\Login;
use Log;

class LogSuccessfulLogin
{
    public function __construct() {

    }

    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        $name = $event->user->name;
        $email = $event->user->email;
        Log::info('Login Successful: '.$name.' '.$email);
    }
}