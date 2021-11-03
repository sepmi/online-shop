<?php

namespace App\Listeners;

use App\Events\UserHasRegisteredEvent;
use App\Mail\WelcomeEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendWelcomeEmailForNewUserListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserHasRegisteredEvent  $event
     * @return void
     */
    public function handle(UserHasRegisteredEvent $event)
    {
        Mail::to($event->user ->email)->send(new WelcomeEmail($event->user));
    }
}
