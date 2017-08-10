<?php

namespace App\Listeners;

use Illuminate\Mail\Events\MessageSending;
use Log;

class LogMessageSending
{
    public function __construct() {

    }

    /**
     * Handle the event.
     *
     * @param  MessageSending  $event
     * @return void
     */
    public function handle(MessageSending $event)
    {
        // TODO Figure out log field
       // $email = $event->user->email;
        Log::info('Message Sent');
    }
}