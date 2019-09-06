<?php

namespace App\Listeners;

use App\Clases\SMS;
use App\Events\NotificationVoterCreate;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

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
     */
    public function handle(NotificationVoterCreate $event)
    {
        $voter = $event->voter;
        $sms = new SMS($voter->phone,"Bienvenido ".$voter->full_name." gracias por confiar en nuestro proyecto politico, Ingrid Pestana 06 #UnidosPorLaPaz.","Bienvenida");
        $sms->sendSms();
    }
}
