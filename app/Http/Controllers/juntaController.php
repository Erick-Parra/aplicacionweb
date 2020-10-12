<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JuntaDirectiva;
use App\Http\Requests\JuntaRequest;
use App;

class juntaController extends Controller
{
   public function buscar()
    {
        $registro = JuntaDirectiva::all();
        return view('admin.buscarjunta', compact('registro'));
    }

    public function editarjunta($id)
    {
        $nota = JuntaDirectiva::findOrFail($id);
        return view('admin.editarjunta', compact('nota'));
    }

    public function store(){

        JuntaDirectiva::create([
            'id' => Request('id'),
            'Asada' => Request('Asada'),
            'Nombre' => Request('Nombre'),
            'Puesto' => Request('Puesto'),

        ]);

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
}
