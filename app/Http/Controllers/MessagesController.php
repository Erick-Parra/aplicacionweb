<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;

class MessagesController extends Controller
{
    public function store()
    {
        $message = request()->validate([ //Valida los datos del email 
            'firstname'=>'required',
            'lastname'=>'required',
            'phonenumber'=>'required|numeric',
            'email'=>'required|email',
            'nameasada'=>'required',
            'asunto'=>'required',
            'messages'=>'required']);

        //Hace que se envíe el email a la dirección establecida
        Mail::to('ligacomunaldelagua@gmail.com')->queue(new MessageReceived($message));

        //return new MessageReceived($message);
        //return 'Mensaje enviado';
        session()->flash('alert-success', 'Enviado exitosamente, contestaremos en cuanto sea posible!'); 
        return back();
        
    }
}

