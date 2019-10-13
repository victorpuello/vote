<?php

namespace App\Http\Controllers\API;

use App\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessagesController extends Controller{
    public function index(){
        return datatables()->eloquent(Message::query())->toJson();
    }

     public function store(Request $request){

    }

    public function show($id){
        //
    }  public function edit($id){
        dd('ddd')
    }

   public function update(Request $request, $id){
    dd('ddd');
    }

    public function destroy($id){
        //
    }
}
