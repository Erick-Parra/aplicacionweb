<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use App\Models\tbl_imgporcent;
use Illuminate\Support\Facades\Storage;
Use App\Http\Requests\ImgporcentRequest;

class imgporcentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request){
                $query = trim($request->get('searchpu'));

                $noticia = tbl_imgporcent::where('id', 'LIKE', '%' . $query . '%')
                          ->orderBy('id', 'asc')
                        ->paginate();

                return view('admin.buscarimg', ['noticia' => $noticia, 'searchpu' => $query]);
                
            }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crearimgporcent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\ImgporcentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImgporcentRequest $request)
    {
        $pubAgregado=request()->except('_token');

        if($request->hasFile('imagen'))
        {
          $pubAgregado['imagen'] = $request->file('imagen')->store('public');
        }

         $request->session()->flash('alert-success', 'Añadido exitosamente!'); 

        tbl_imgporcent::create($pubAgregado);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tbl_imgporcent  $tbl_imgporcent
     * @return \Illuminate\Http\Response
     */
    public function show(tbl_imgporcent $tbl_imgporcent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tbl_imgporcent  $tbl_imgporcent
     * @return \Illuminate\Http\Response
     */
    public function editar($idimg)
    {
        $publicacion = tbl_imgporcent::findOrFail($idimg);
        return view('admin.editarimgporcent', compact('publicacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tbl_imgporcent  $tbl_imgporcent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idimg)
    {
        $pubActualizado=request()->except(['_token','_method']);

        if($request->hasFile('imagen'))
        {
          $publicacion= tbl_imgporcent::findOrFail($idimg);

          Storage::delete('public/'.$publicacion->imagen);
        
          $pubActualizado['imagen'] = $request->file('imagen')->store('public');
        }

          $request->session()->flash('alert-success', 'Actualización exitosa!'); 

        tbl_imgporcent::where('id','=',$idimg)->update($pubActualizado);

        $publicacion = tbl_imgporcent::findOrFail($idimg);
        return view('admin.editarimgporcent',compact('publicacion'));
       
            return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tbl_imgporcent  $tbl_imgporcent
     * @return \Illuminate\Http\Response
     */
    public function eliminar(Request $request,$idimg){
     
        $request->session()->flash('alert-success', 'Eliminado exitosamente!'); 

        $pubEliminar = tbl_imgporcent::findOrFail($idimg);
        $pubEliminar->delete();
        return back();
    }
}