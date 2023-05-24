<?php

namespace App\Http\Controllers;

use App\Clases\Welcome;
use App\Http\Requests\UpdateMessageRequest;
use App\Message;
use Illuminate\Http\Request;
use Styde\Html\Facades\Alert;

class ConfigController extends Controller
{

    public function index(){
        $sms = Message::first();
        return view('admin.config.index',compact('sms'));
    }
    public function storeSms(UpdateMessageRequest $request){
        //$this->welcome->setMessage($request->all());
        Alert::message('Mensaje actualizado con exito','success');
        return redirect()->route('config');
    }

}
