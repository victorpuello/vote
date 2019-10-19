<?php


namespace App\Clases;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Config;

class SMS extends Notification implements ShouldQueue
{

    use Queueable;
    protected $url;
    protected $url2;
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
    public function __construct($numero, $sms, $referencia)
    {
        $this->url = 'https://api.hablame.co/sms/envio/';
        $this->url2 = 'https://api.hablame.co/saldo/consulta/index.php';
        $this->numero = $numero;
        $this->sms = $sms;
        $this->fecha = '';
        $this->referencia = $referencia;
        $this->cliente = Config::get('sms.cliente');
        $this->key = Config::get('sms.key');
    }


    /**
     * @param string $type
     * @return array
     */
    public function getOptions(string $type="saldo"){
        $data = array(
            'cliente' => $this->cliente,
            'api' => $this->key,
        );
        if ($type ==="sms"){
            $data['numero'] = $this->numero;
            $data['sms'] = $this->sms;
            $data['fecha'] = '';
            $data['referencia'] = $this->referencia;
        }
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
        $context  = stream_context_create($this->getOptions('sms'));
        $result =  json_decode((file_get_contents($this->url,false,$context)),true);
        return $result["resultado"] === 0 ? 'Se ha enviado el SMS exitosamente':'ha ocurrido un error!!';
    }

    public function saldo(){
        $context  = stream_context_create($this->getOptions());
        $result = json_decode((file_get_contents($this->url2, false, $context)), true);
        return $result["resultado"] === 0 ? number_format($result["saldo"],0,',','.'):$result["resultado_t"];
    }
}
