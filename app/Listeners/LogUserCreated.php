<?php

namespace App\Listeners;

use Log;
use App\Events\UserCreated;

class LogUserCreated
{
    /**
     * Create the event listener.
     *
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserCreated  $event
     * @return void
     */
    public function handle(UserCreated $event)
    {
        // Access the podcast using $event->podcast...
        $name = $event->user->name;
        $email = $event->user->email;
        Log::info('User Successfully Created: '.$name.' '.$email);
    }
}