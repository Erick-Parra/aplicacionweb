<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblMapeo;

class ControllerMap extends Controller
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
        return view('admin.createmapeo');
    }

     public function store(){
        TblMapeo::create([
            'Nom_Asada' => Request('Nom_Asada'),
            'Archivo_SHP' => Request('Archivo_SHP'),
        ]);
    }
    }
    



  

   
