<?php

namespace App\Listeners;

use App\Clases\SMS;
use App\Events\NotificationVoterCreate;

class NotificationVoterCreateListener
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
     * @param NotificationVoterCreate $event
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function handle(NotificationVoterCreate $event)
    {
        $voter = $event->voter;
        $msg = "Bienvenind@ ".$voter->name." a nuestro proyecto politico SBDV 2024-2027 -v";
        $sms = new SMS();
        $sms->sendSms($voter->phone,$msg);
    }
}


