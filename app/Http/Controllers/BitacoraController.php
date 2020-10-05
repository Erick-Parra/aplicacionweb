<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblControloperativo;
use App\Http\Requests\BitacoraRequest;
use App;

class BitacoraController extends Controller
{
    public function index(Request $request)
    {
        if($request)
        {
            $result = trim($request->get(key::search));
            $nom = Nom_Asada::where('Nom_Asada', 'like', '%'.search.'%')
            ->paginate(5);
            return view('admin.index', ['Nom_Asada' => $nom, 'search'=>$result]);
        }
    }

    public function show()
    {
       
    }

    public function buscar()
    {
        $registro = TblControloperativo::all();
        return view('admin.buscarbitacora', compact('registro'));
    }

    public function editar($id)
    {
        $nota = TblControloperativo::findOrFail($id);
        return view('admin.editarbitacora', compact('nota'));
    }

    public function update(BitacoraRequest $request, $id)
    {

        $notaActualizada = TblControloperativo::findOrFail($id);
        $notaActualizada->Nom_Asada = $request->input('Nom_Asada');
        $notaActualizada->Encargado = $request->input('Encargado');
        $notaActualizada->Ubicacion = $request->input('Ubicacion');
        $notaActualizada->Turbiedad = $request->input('Turbiedad');
        $notaActualizada->Olor = $request->input('Olor');
        $notaActualizada->Cloro = $request->input('Cloro');
        $notaActualizada->PH = $request->input('PH');
        $notaActualizada->Sabor = $request->input('Sabor');
        $notaActualizada->Temperatura = $request->input('Temperatura');
        $notaActualizada->Observacion = $request->input('Observacion');
        $notaActualizada->save();

       $request->session()->flash('alert-success', 'Actualización exitosa!'); 

            return back();
    }
    public function eliminar(Request $request,$id){

        $request->session()->flash('alert-success', 'Eliminado exitosamente!'); 

        $notaEliminar = TblControloperativo::findOrFail($id);
        $notaEliminar->delete();

        return back();
    }

    public function create()
    {
        return view('admin.crearbitacora');
    }

    public function store(BitacoraRequest $request){

        

        TblControloperativo::create([
            'idControl' => Request('idControl'),
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

          $request->session()->flash('alert-success', 'Añadido exitosamente!'); 

        return back();
    }
}
