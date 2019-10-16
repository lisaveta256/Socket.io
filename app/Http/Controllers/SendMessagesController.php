<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendMessagesController extends Controller
{
   public function send(Illuminate\Http\Request $request){
    App\Events\Message::dispatch($request->input('body')) ;
   }
}
