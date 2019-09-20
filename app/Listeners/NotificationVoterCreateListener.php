<?php

namespace App\Listeners;

use App\Clases\SMS;
use App\Clases\Welcome;
use App\Events\NotificationVoterCreate;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Styde\Html\Facades\Alert;

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
        $message = new Welcome();
        if ($message->searchTag()){
            $sms = new SMS($voter->phone,$message->getSMS($voter->full_name),$message->getType());
            $sms->sendSms();
        }else{
            Alert::message('El SMS no fué enviado - Verifica que la etiqueta {vote} este definida en tu Mensaje','warning')->html('<a href="'.route('config').'">Ir a Config</a>');
        }
    }
}
