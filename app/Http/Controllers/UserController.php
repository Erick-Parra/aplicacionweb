<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
use App\Http\Requests\UserFormRequest;

class UserController extends Controller
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

                $users = User::where('name', 'LIKE', '%' . $query . '%')
                        ->orderBy('id', 'asc')
                        ->paginate();
                return view('admin.usuarios.index', ['users' => $users, 'search' => $query]);
            }

     // $users = User::all();
       // return view('admin.usuarios.index', ['users' => $users]);
    }

    public function create()
    {
        $roles = Role::all();
        return view('admin.usuarios.crear', ['roles' => $roles]);
    }


    public function store(Request $request)
    {

        $usuario = new User();

        $usuario->name = request('name');
        $usuario->email = request('email');
        $usuario->password = bcrypt(request('password'));

        $usuario->save();

        $usuario->asignarRol($request->get('rol'));

        return redirect('/usuarios');
      //  User::create([
     //   'name' => request('name'),
      //  'email' => request('email'),
     //   'password' => bcrypt(request('password')),
       // ]);
         // return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     return view('admin.usuarios.show', ['user' => User::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.usuarios.editar', ['user' => User::findOrFail($id)]);
    }

    public function update(UserFormRequest $request, $id)
    {
        $usuario = User::findOrFail($id);

        $usuario->name = $request->get('name');
        $usuario->email = $request->get('email');

        $usuario->update();
          return redirect('/usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::findOrFail($id);

        $usuario->delete();

        return redirect('/usuarios');
    }
}
