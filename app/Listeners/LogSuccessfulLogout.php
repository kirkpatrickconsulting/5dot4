<?php

namespace App\Listeners;
use Illuminate\Auth\Events\Logout;
use Log;

class LogSuccessfulLogout
{
    public function __construct() {

    }
    
    /**
     * Handle the event.
     *
     * @param  Logout  $event
     * @return void
     */
    public function handle(Logout $event)
    {
        $name = $event->user->name;
        $email = $event->user->email;
        Log::info('Logout Successful: '.$name.' '.$email);
    }
}