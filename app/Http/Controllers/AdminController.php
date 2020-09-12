<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblRegistroasada;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    public function show()
    {

    }

    public function create()
    {
        return view('admin.createasada');
    }

    public function store(){
        TblRegistroasada::create([
            'idAsada' => Request('idAsada'),
            'Nom_Asada' => Request('Nom_Asada'),
            'nombreRegion' => Request('nombreRegion'),
            'Fecha_Registro' => Request('Fecha_Registro'),
            'ced_Juridica' => Request('ced_Juridica'),
            'Num_Convenio' => Request('Num_Convenio'),
            'Cant_Abonados' => Request('Cant_Abonados'),
            'Fecha_Solicitud' => Request ('Fecha_Solicitud'),
            'Num_Sesion' => Request('Num_Sesion'),
            'Presidente' => Request('Presidente'),
            'VicePresidente' =>Request('VicePresidente'),
            'Tesorero' => Request('Tesorero'),
            'Vocal_1' => Request('Vocal_1'),
            'Vocal_2' => Request('Vocal_2'),
            'Fiscal' => Request('Fiscal'),
            'Razon_Afiliacion' =>Request('Razon_Afiliacion'),
            'Telefono' =>Request('Telefono'),
            'Correo' =>Request('Correo'),
        ]);
    }

}
