<?php

namespace App\Listeners;

use App\Events\UserHasRegisteredEvent;
use App\Mail\NewUserRegisteredEmailForAdmin;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailForAdminsNewUserHasRegisteredListener
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
        $admins = User::where('is_admin' , 1)->get();
        foreach ($admins as $admin){


            Mail::to($admin->email)->send(new NewUserRegisteredEmailForAdmin($event->user,$admin));
        }
        
    }
}
