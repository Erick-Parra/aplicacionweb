<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblRegistroasada;
use App\Http\Requests\AsadasRequest;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

         public function index(Request $request)
    {
          if ($request){
                $searchasa = trim($request->get('searchasa'));

                $asada = TblRegistroasada::where('Nom_Asada', 'LIKE', '%' . $searchasa . '%')
                          ->orderBy('idAsada', 'asc')
                        ->paginate(5);

                return view('admin.buscarasada', compact('asada','searchasa'));

            }


    }

    public function buscar(Request $request){

            return view('admin.index',[
            'asadas' => TblRegistroasada::paginate(5)
        ]);
    }

    public function show(TblRegistroasada $asada)
    {
        return view('admin.showasada', [
            'asadas' => $asada
        ]);
    }



    public function create()
    {
        return view('admin.createasada');
    }

    public function store(AsadasRequest $request){


        TblRegistroasada::create([
            'idAsada' => Request('idAsada'),
            'Nom_Asada' => Request('Nom_Asada'),
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
            'nombreRegion' =>Request('Region'),
            'Razon_Afiliacion' =>Request('Razon_Afiliacion'),
            'Telefono' =>Request('Telefono'),
            'Correo' =>Request('Correo'),
        ]);
        $request->session()->flash('alert-success', 'Añadido exitosamente!');
         return back();
      //  return redirect()->route('admin');
    }

    public function edit(TblRegistroasada $asada)
    {
         return view('admin.editasada', [
            'asadas' => $asada
        ]);
    }

    public function update(Request $request, TblRegistroasada $asada)
    {
        $asada->update([
            'Nom_Asada' => Request('Nom_Asada'),
            'ced_Juridica' => Request('ced_Juridica'),
            'Num_Convenio' => Request('Num_Convenio'),
            'Cant_Abonados' => Request('Cant_Abonados'),
            'Num_Sesion' => Request('Num_Sesion'),
            'Presidente' => Request('Presidente'),
            'VicePresidente' =>Request('VicePresidente'),
            'Tesorero' => Request('Tesorero'),
            'Vocal_1' => Request('Vocal_1'),
            'Vocal_2' => Request('Vocal_2'),
            'Fiscal' => Request('Fiscal'),
            'nombreRegion' =>Request('Region'),
            'Razon_Afiliacion' =>Request('Razon_Afiliacion'),
            'Telefono' =>Request('Telefono'),
            'Correo' =>Request('Correo'),
        ]);

          $request->session()->flash('alert-success', 'Actualización exitosa!');

        return back();



      //  return redirect()->route('admin.show',$asada);

    }
    public function destroy(Request $request, TblRegistroasada $asada)
    {
        $request->session()->flash('alert-success', 'Eliminado exitosamente!');
        $asada->delete();
        return back();

      // return redirect()->route('admin');
    }
}
