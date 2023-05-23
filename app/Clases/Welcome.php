<?php


namespace App\Clases;


use App\Message;

class Welcome
{
    /**
     * Almacena el Mensaje de Bienvenida.
     *
     * @var Message
     */
    protected $message;
    public function __construct()
    {
        $this->message = Message::where('type','=','welcome')->first();
        if ($this->validateWelcomeMessage()){
            $this->createWelcomeMessage();
        }
    }


    /**
     * @param $name
     * @return string|null
     */
    public function getSMS($name){
        return $this->searchTag() ? $this->replace($name):null;
    }

    /**
     * @return Message
     */
    public function getMessage(){
        return $this->message;
    }

    /**
     * @param $data
     */
    public function setMessage($data):void {
        $this->message->update($data);
//        dd($data,$this->message);
    }
    /**
     * @param $name
     * @return string
     */
    public function replace($name){
        return str_replace('{voter}',$name,$this->message->message);
    }
    /**
     * @return bool
     */
    public function searchTag(){
        return strripos($this->message,'{voter}') ? true:false;
    }
    /**
     * @return bool
     */
    public function validateWelcomeMessage(){
        return is_null($this->message) ? true:false;
    }

    /**
     * @return Message
     */
    public function createWelcomeMessage()
    {
        $this->message = Message::create([
            'name'=>"weelcome",
            'message' => "Aquí debes redactar tu mensaje de Bienvenida",
            'type' => "welcome"
        ]);
        return $this->message;
    }

    /**
     * @return string
     */
    public function getType(){
        return $this->message->type;
    }
}
