<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\coments;

class comentsController extends Controller
{
     public function store()
    {
    	$message = request()->validate([ //Valida los datos del email 
    		'Nombre'=>'required',
    		'email'=>'required',
    		'asunto'=>'required',
    		'messages'=>'required']);

    	//Hace que se envíe el email a la dirección establecida
    	Mail::to('priscila.villarreal.1306@gmail.com')->queue(new coments($message));

    	//return new MessageReceived($message);
    	//return 'Mensaje enviado';
        session()->flash('alert-success', 'Enviado exitosamente su comentario, nos ayudara a mejorar!'); 
        return back();
    	
    }
}
