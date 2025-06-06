<?php

namespace App\Http\Controllers;

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
    public function storeSms(UpdateMessageRequest $request)
    {
        $sms = Message::first();

        if ($sms) {
            $sms->update($request->only('message', 'type'));
        } else {
            Message::create([
                'name'    => 'SMS',
                'message' => $request->input('message'),
                'type'    => $request->input('type'),
            ]);
        }

        Alert::message('Mensaje actualizado con exito', 'success');
        return redirect()->route('config');
    }

}
