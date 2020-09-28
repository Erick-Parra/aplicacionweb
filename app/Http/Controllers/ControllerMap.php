<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblMapeo;
use Illuminate\Support\Facades\Storage;
use App;

class ControllerMap extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index(Request $request)
    {

        //$datos['registro']=TblMapeo::paginate(5);
      $registro=TblMapeo::search($request->Nom_Asada)->orderBy('idmap', 'DESC')->paginate(5);

   
    //  $name =$request->get('buscarpor');
     // $registro = TblMapeo::where('Nom_Asada','like',"%Nom_Asada%")->paginate(5);

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
          $mapeoActualizado=request()->except(['_token','_method']);

        if($request->hasFile('Archivo_SHP'))
        {
          $mapeos= TblMapeo::findOrFail($idmap);

          Storage::delete('public/'.$mapeos->Archivo_SHP);
        
          $mapeoActualizado['Archivo_SHP'] = $request->file('Archivo_SHP')->store('public');
        }

          $request->session()->flash('alert-success', 'Actualización exitosa!'); 

        TblMapeo::where('IdMapeo','=',$idmap)->update($mapeoActualizado);

        $mapeos = TblMapeo::findOrFail($idmap);
        return view('admin.editarmapeo',compact('mapeos'));
       // $mapeoActualizado->save();
            return back();
    }
    public function eliminar(Request $request,$idmap){
     
        $request->session()->flash('alert-success', 'Eliminado exitosamente!'); 

        $mapeoEliminar = TblMapeo::findOrFail($idmap);
        $mapeoEliminar->delete();
 


        return back();
    }


    public function create()
    {
        return view('admin.createmapeo');
    }

     public function store(Request $request){

     // $campos=[
       // 'Nombre'=>'required|string|max:100',
       // 'Archivo'=>'required|max:10000|mimes:jpeg,png,jpg'
   // ];
   // $Mensaje=["required"=>'El :attribute es requerido'];
   // $this->validate($request,$campos,$Mensaje);

     //  $mapeoAgregado=request()->all();

        $mapeoAgregado=request()->except('_token');

        if($request->hasFile('Archivo_SHP'))
       {
          $mapeoAgregado['Archivo_SHP'] = $request->file('Archivo_SHP')->store('public');
        }

         $request->session()->flash('alert-success', 'Añadido exitosamente!'); 

        TblMapeo::create($mapeoAgregado);

  
        //return response()->json($mapeoAgregado);

        return back();
    }
    }
    



  

   
