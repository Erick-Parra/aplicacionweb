<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblControloperativo;

class BitacoraController extends Controller
{

    public function show()
    {

    }

    public function create()
    {
        return view('admin.crearbitacora');
    }

    public function store(){
        TblControloperativo::create([
            'Nom_Asada' => Request('Nom_Asada'),
            'Fecha_Control' => Request('Fecha_Control'),
            'Encargado' => Request('Encargado'),
            'Ubicacion' => Request('Ubicacion'),
            'Turbiedad' => Request('Turbiedad'),
            'Olor' => Request ('Olor'),
            'Cloro' => Request('Cloro'),
            'PH' => Request('PH'),
            'Sabor' =>Request('Sabor'),
            'Temperatura' => Request('Temperatura'),
            'Observacion' => Request('Observacion'),
        ]);
    }
}
