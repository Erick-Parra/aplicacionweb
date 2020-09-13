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

     public function index(Request $request)
    {
    
      $name =$request->get('buscarpor');
      $registro = TblMapeo::where('Nom_Asada','like',"%Nom_Asada%")->paginate(5);

     return view ('admin.buscarmapeo', compact('registro'));

    
    }

   public function buscar()
    {
      $registro = TblMapeo::all();
      return view('admin.buscarmapeo', compact('registro'));
     
    }

    public function editar($idmap)
    {
        $mapeos = TblMapeo::findOrFail($idmap);
        return view('admin.editarmapeo', compact('mapeos'));
    }

    public function update (Request $request, $idmap)
    {

        $mapeoActualizado = TblMapeo::findOrFail($idmap);
       // $mapeoActualizado->Nom_Asada = $request->input('Nom_Asada');
        $mapeoActualizado->Archivo_SHP = $request->input('Archivo_SHP');
        $mapeoActualizado->save();

            return back();
    }
    public function eliminar($idmap){

        $mapeoEliminar = TblMapeo::findOrFail($idmap);
        $mapeoEliminar->delete();

        return back();
    }


    public function create()
    {
        return view('admin.createmapeo');
    }

     public function store(Request $request){

        $datosmapeo=request()->all();
       // $datosmapeo=request()->except('_token');

        if($archivo=$request->file('Archivo')){
            $nombre=$archivo->getClientOriginalName();
            $archivo->move('Images', $nombre);
            $datosmapeo['Archivo_SHP']=$nombre;
        }

          TblMapeo::create($datosmapeo);

        //TblMapeo::create([
            // 'IdMapeo' => Request('IdMapeo'),
           // 'Nom_Asada' => Request('Nom_Asada'),
           // 'Archivo_SHP' => Request('Archivo_SHP'),

        //]);

        return back();


    }
    }
    



  

   
