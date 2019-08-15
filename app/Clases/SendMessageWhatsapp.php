<?php


namespace App\Clases;

use phpDocumentor\Reflection\Types\Integer;
use Twilio\Rest\Client;
class SendMessageWhatsapp
{
    protected $sid;
    protected $token;
    protected $twilio;

    public function __construct()
    {
        $this->sid = env('TWILIO_ACCOUNT_SID');
        $this->token = env('TWILIO_AUTH_TOKEN');
        $this->twilio = new Client($this->sid,$this->token);
    }

    public function sendMessage($message, $num){
        $msg = $this->twilio->messages->create("whatsapp:".env('MY_WHATSAPP_NUMBER'),[
            "body" => $message,
            "from" => "whatsapp:".getenv("TWILIO_WHATSAPP_NUMBER")
        ]);
        print ($msg->sid);
    }
}
