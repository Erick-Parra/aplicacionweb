<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
Use App\Http\Requests\PostRequest;
use App;

class PostsController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth')->except('show');
  }

	 public function index(Request $request)
    {
        if ($request){
                $query = trim($request->get('searchpu'));

                $noticia = Post::where('TituloNoti', 'LIKE', '%' . $query . '%')
                          ->orderBy('Id', 'asc')
                        ->paginate();

                return view('admin.buscarnoti', ['noticia' => $noticia, 'searchpu' => $query]);
                
            }
    }

	public function create()
    {
        return view('admin.crearnoti');
    }

    public function store(PostRequest $request){
        	
        $pubAgregado=request()->except('_token');

        if($request->hasFile('imagen'))
        {
          $pubAgregado['imagen'] = $request->file('imagen')->store('public');
        }

         $request->session()->flash('alert-success', 'Añadido exitosamente!'); 

        Post::create($pubAgregado);

        return back();
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

          Storage::delete($publicacion->imagen);
        
          $pubActualizado['imagen'] = $request->file('imagen')->store('public');
        }

          $request->session()->flash('alert-success', 'Actualización exitosa!'); 

        Post::where('Id','=',$idpub)->update($pubActualizado);

        $publicacion = Post::findOrFail($idpub);
        return view('admin.editarnoti',compact('publicacion'));
       
            return back();
    }
    public function eliminar(Request $request,$idpub){
     
      $request->session()->flash('alert-success', 'Eliminado exitosamente!'); 
            
        $eliminar = Post::where('Id', $idpub)->get()->first();
        Storage::delete($eliminar->imagen);
         Post::destroy($idpub);

         return back();
    }

    public function show()
    {
      $posts = Post::all();
        return view('partials.Informacion.noticias', compact('posts'));
    }
}
