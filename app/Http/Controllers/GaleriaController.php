<?php

namespace App\Http\Controllers;

use App\Models\TblGaleria;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\GaleriaRequest;
use Illuminate\Http\Request;
use App;

class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request){
                $query = trim($request->get('search'));

                $galeria = TblGaleria::where('Nombre', 'LIKE', '%' . $query . '%')
                          ->orderBy('idGaleria', 'asc')
                        ->paginate();

                return view('admin.buscargaleria', ['galeria' => $galeria, 'search' => $query]);
                
             }
    }

   
    public function create()
    {
        return view('admin.creargaleria');
    }

   
    public function store(GaleriaRequest $request)
    {
        $galeriaAgregada=request()->except('_token');

        if($request->hasFile('Nombre'))
        {
          $galeriaAgregada['Nombre'] = $request->file('Nombre')->store('public');
        }

         $request->session()->flash('alert-success', 'Añadido exitosamente!'); 

        TblGaleria::create($galeriaAgregada);

        return back();
    }

  
    public function show(Galeria $galeria)
    {
        //
    }

   
    public function editar($idgaleria)
    {
         $galeria = TblGaleria::findOrFail($idgaleria);
        return view('admin.editargaleria', compact('galeria'));
    }

    public function update(Request $request, $idgaleria)
    {
         $actualizada =request()->except(['_token','_method']);

        if($request->hasFile('Nombre'))
        {
          $galeria= TblGaleria::findOrFail($idgaleria);

          Storage::delete('public/'.$galeria->Nombre);
        
          $actualizada['Nombre'] = $request->file('Nombre')->store('public');
        }

          $request->session()->flash('alert-success', 'Actualización exitosa!'); 

        TblGaleria::where('idGaleria','=',$idgaleria)->update($actualizada);

        $galeria = TblGaleria::findOrFail($idgaleria);
        return view('admin.editargaleria',compact('galeria'));
       
            return back();
    }

  
  public function eliminar(Request $request,$idgaleria){
     
        $request->session()->flash('alert-success', 'Eliminado exitosamente!'); 

        $Eliminar = TblGaleria::findOrFail($idgaleria);
        $Eliminar->delete();
        return back();
    }
}
