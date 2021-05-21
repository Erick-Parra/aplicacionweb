<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JuntaDirectiva;
use App\Http\Requests\JuntaRequest;
use App;

class juntaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    
    }

   public function buscar()
    {
        $registro = JuntaDirectiva::all();
        return view('admin.buscarjunta', compact('registro'));
    }
    public function create()
    {
        $categorias = JuntaDirectiva::all();
      
        return view('admin.crearjunta', compact('categorias'));
    }

    public function editarjunta($id)
    {
        $nota = JuntaDirectiva::findOrFail($id);
        return view('admin.editarjunta', compact('nota'));
    }

    public function store(JuntaRequest $request){

        JuntaDirectiva::create([
            'id' => Request('id'),
            'Nombre' => Request('Nombre'),
            'Puesto' => Request('Puesto'),
            'Asada' => Request('Asada')

        ]);

         $request->session()->flash('alert-success', 'Añadido exitosamente!');
         return back();
    }

    public function update(Request $request, $id)
    {

        $notaActualizada = JuntaDirectiva::findOrFail($id);
        $notaActualizada->Nombre = $request->input('Nombre');
        $notaActualizada->Puesto = $request->input('Puesto');
        $notaActualizada->Asada = $request->input('Asada');
        $notaActualizada->save();

        $request->session()->flash('alert-success', 'Actualización exitosa!'); 

        return back();
    }

    public function eliminar(Request $request,$idjunta){

        $juntaEliminar = JuntaDirectiva::findOrFail($idjunta);
        $juntaEliminar->delete();
        return back();
        $request->session()->flash('alert-success', 'Eliminado exitosamente!'); 
    }
}
