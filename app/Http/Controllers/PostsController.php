<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use App;

class PostsController extends Controller
{
	 public function index(Request $request)
    {
      $registro=Post::search($request->TituloNoti)->orderBy('id', 'DESC')->paginate(5);
      return view ('admin.buscarpub', compact('registro'));
    }

	public function create()
    {
        return view('admin.crearnoti');
    }

    public function store(Request $request){
        	
        $pubAgregado=request()->except('_token');

        if($request->hasFile('imagen'))
        {
          $pubAgregado['imagen'] = $request->file('imagen')->store('public');
        }

         $request->session()->flash('alert-success', 'Añadido exitosamente!'); 

        Post::create($pubAgregado);

        return back();
    }

    public function buscar()
    {
      $registro = Post::all();
      return view('admin.buscarnoti', compact('registro'));
     
    }

    public function editar($idpub)
    {
        $publicacion = Post::findOrFail($idpub);
        return view('admin.editarnoti', compact('publicacion'));
    }

    public function update (Request $request, $idpub)
    {
          $pubActualizado=request()->except(['_token','_method']);

        if($request->hasFile('imagen'))
        {
          $publicacion= Post::findOrFail($idpub);

          Storage::delete('public/'.$publicacion->imagen);
        
          $pubActualizado['imagen'] = $request->file('imagen')->store('public');
        }

          $request->session()->flash('alert-success', 'Actualización exitosa!'); 

        Post::where('Id','=',$idpub)->update($pubActualizado);

        $publicacion = Post::findOrFail($idpub);
        return view('admin.editarnoti',compact('publicacion'));
       
            return back();
    }
    public function eliminar(Request $request,$idmap){
     
        $request->session()->flash('alert-success', 'Eliminado exitosamente!'); 

        $pubEliminar = Post::findOrFail($idpub);
        $pubEliminar->delete();
        return back();
    }

    public function show(Post $idpub)
    {
       //$publicacion = Post::findOrFail($idpub);
        //return view('partials.Informacion.post-view', compact('publicacion'));
      return view('partials.Informacion.post-view');
    }
}
