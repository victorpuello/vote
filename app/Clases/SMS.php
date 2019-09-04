<?php


namespace App\Clases;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;

class SMS extends Notification implements ShouldQueue
{

    use Queueable;
    protected $url;
    protected $numero;
    protected $sms;
    protected $fecha;
    protected $referencia;
    protected $cliente;
    protected $key;

    /**
     * SMS constructor.
     * @param int $numero
     * @param string $sms
     * @param string $referencia
     */
    public function __construct(int $numero, string $sms, string $referencia)
    {
        $this->url = 'https://api.hablame.co/sms/envio/';
        $this->numero = $numero;
        $this->sms = $sms;
        $this->fecha = '';
        $this->referencia = $referencia;
        $this->cliente = env('HABLAME_CLIENTE');
        $this->key = env('HABLAME_APP_KEY');
    }

    /**
     * @return array
     */
    public function getOptions(){
        $data = array(
            'cliente' => $this->cliente,
            'api' => $this->key,
            'numero' => $this->numero,
            'sms' => $this->sms,
            'fecha' => '', //(campo opcional) Fecha de envio, si se envia vacio se envia inmediatamente (Ejemplo: 2017-12-31 23:59:59)
            'referencia' => $this->referencia,
        );
        return array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            ));
    }

    /**
     * @return string
     */
    public function sendSms(){
        $context  = stream_context_create($this->getOptions());
        $result =  json_decode((file_get_contents($this->url,false,$context)),true);
        return $result["resultado"] === 0 ? 'Se ha enviado el SMS exitosamente':'ha ocurrido un error!!';
    }
}
