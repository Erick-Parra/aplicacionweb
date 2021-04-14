<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblGaleria;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\GaleriaRequest;


class ControllerGaleria extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index(Request $request)
    {
         if ($request){
                $query = trim($request->get('searchm'));

                $galeria = TblGaleria::where('idGaleria', 'LIKE', '%' . $query . '%')
                          ->orderBy('IdGaleria', 'asc')
                        ->paginate();

                return view('admin.buscargaleria', ['galeria' => $galeria, 'searchm' => $query]);
                
            }
   
}
   

    public function editar($idgaleria)
    {
        $galeria = TblGaleria::findOrFail($idgaleria);
        return view('admin.editargaleria', compact('galeria'));
    }

    public function update (Request $request, $idgaleria)
    {
          $gaActualizado=request()->except(['_token','_method']);

        if($request->hasFile('Nombre'))
        {
          $galeria= TblGaleria::findOrFail($idgaleria);

          Storage::delete('public/'.$galeria->Nombre);
        
          $gaActualizado['Nombre'] = $request->file('Nombre')->store('public');
        }

          $request->session()->flash('alert-success', 'Actualización exitosa!'); 

        TblGaleria::where('IdGaleria','=',$idgaleria)->update($gaActualizado);

        $galeria = TblGaleria::findOrFail($idgaleria);
        return view('admin.editargaleria',compact('galeria'));
       // $mapeoActualizado->save();
            return back();
    }
    public function eliminar(Request $request,$idgaleria){
     
        $request->session()->flash('alert-success', 'Eliminado exitosamente!'); 

        $gaEliminar = TblGaleria::findOrFail($idgaleria);
        $gaEliminar->delete();
 


        return back();
    }


    public function create()
    {
      $categorias = TblGaleria::all();
        return view('admin.creargaleria', compact('categorias'));
    }

     public function store(GaleriaRequest $request){

     //  $mapeoAgregado=request()->all();

        $gaAgregado=request()->except('_token');

        if($request->hasFile('Nombre'))
       {
          $gaAgregado['Nombre'] = $request->file('Nombre')->store('public');
        }

         $request->session()->flash('alert-success', 'Añadido exitosamente!'); 

        TblGaleria::create($gaAgregado);

  
     

        return back();
    }
    }
    