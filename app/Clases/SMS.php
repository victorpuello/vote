<?php


namespace App\Clases;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
/**
 * [Description SMS]
 */
class SMS extends Notification implements ShouldQueue
{

    use Queueable;
    protected $url_saldo;
    protected $url_sms;
    protected $cliente;
    protected $key;
    protected $token;
    protected $headers;


    /**
     * [Description for __construct]
     *
     * 
     */
    public function __construct()
    {
        $this->url_saldo = Config::get('sms.endpoint_saldo');
        $this->url_sms = Config::get('sms.endpoint_sms');
        $this->cliente = Config::get('sms.cliente');
        $this->key = Config::get('sms.key');
        $this->token = Config::get('sms.token');
        $this->headers = [
            'account'=> $this->cliente,
            'apiKey' => $this->key,
            'token' => $this->token
        ];
    }

    /**
     * [Description for sendSms]
     *
     * @param mixed $numero
     * @param mixed $sms
     * 
     * @return [type]
     * 
     */
    public function  sendSms($numero, $sms){
        $sms_p = Http::withHeaders($this->headers)->post($this->url_sms,[
                "toNumber" => $numero,
                "sms" => $sms,
                "flash"=> "0",
                "sc" => "890202",
                "request_dlvr_rcpt"=> "0"
            ]
        );
        return $sms_p["status"] === "1x000" ? 'Se ha enviado el SMS exitosamente':'ha ocurrido un error!!';
    }

    /**
     * [Description for saldo]
     *
     * @return [type]
     * 
     */
    public function saldo(){
        $response = Http::withHeaders($this->headers)->get($this->url_saldo);
        $saldo = $response->object()->data->balance;
        return $saldo;
    }
}
