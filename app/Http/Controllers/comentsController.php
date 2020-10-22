<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Mail;
use App\Mail\coments;

class comentsController extends Controller
{
     public function store()
    {
    	$message = request()->validate([ //Valida los datos del email 
    		'firstname'=>'required',
            'email'=>'required|email',
            'messages'=>'required']);

    	//Hace que se envíe el email a la dirección establecida
    	Mail::to('viviana.lopez.turcios@est.una.ac.cr')->queue(new coments($message));

        session()->flash('alert-success', 'Enviado exitosamente su comentario, nos ayudara a mejorar!'); 
        return back();
    	
    }
}
