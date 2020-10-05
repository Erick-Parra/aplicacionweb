<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JuntaDirectiva;
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
            'Presidente' => Request('Presidente'),
            'vicePresidente' => Request('vicePresidente'),
            'Secretario' => Request('Secretario'),
            'Tesorero' => Request('Tesorero'),
            'Vocal' => Request('Vocal'),
            'Suplente1' => Request ('Suplente1'),
            'Suplente2' => Request('Suplente2'),
            'Fiscal' => Request('Fiscal'),

        ]);

        return back();
    }

    public function update(Request $request, $id)
    {

        $notaActualizada = JuntaDirectiva::findOrFail($id);
        $notaActualizada->Presidente = $request->input('Presidente');
        $notaActualizada->vicePresidente = $request->input('vicePresidente');
        $notaActualizada->Secretario = $request->input('Secretario');
        $notaActualizada->Tesorero = $request->input('Tesorero');
        $notaActualizada->Vocal = $request->input('Vocal');
        $notaActualizada->Suplente1 = $request->input('Suplente1');
        $notaActualizada->Suplente2 = $request->input('Suplente2');
        $notaActualizada->Fiscal = $request->input('Fiscal');
        $notaActualizada->save();

        $request->session()->flash('alert-success', 'Actualización exitosa!'); 

        return back();
    }
}
