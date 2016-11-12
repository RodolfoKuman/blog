<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\User;
use Laracasts\Flash\Flash;
use App\Http\Requests\UserRequest;


class UsersController extends Controller
{



  public function show(){
    //$users = DB::select('select name from users where name = ?', ["Rodolfo"]);
   //return view('admin.users.index')->with('users',$users);
   //return view('admin.users.index2', ['users' => $users]);
  }

  public function index()
  {
   $users = User::orderBy('id','ASC')->paginate(5);
    //$users = User::all();
    //$users = DB::select('select * from users where id = ?', [1]);
   return view('admin.users.index')->with('users',$users);
   //return view('admin.users.index2', ['users' => $users]);
  }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(UserRequest $request)
    {
      $user = new User($request->all());
      $user->password = bcrypt($request->password);
      $user->save();

      flash("Se ha registrado ".$user->name." de forma exitosa","success");
      return redirect()->route('users.index');
    }

    public function edit($id)
    {
      $user = User::find($id);
      return view('admin.users.edit')->with('user',$user);
    }

    public function update(Request $request, $id)
    {
      $user = User::find($id);
      //$user->fill($request->all()); guarda todos los campos
      $user->name = $request->name;
      $user->email = $request->email;
      $user->type = $request->type;
      $user->save();

      flash("El usuario ". $user->name. " a sido actualizado", "success");
      return redirect()->route('users.index');
    }

    public function destroy($id)
    {
      $user = User::find($id);
      $user->delete();

      flash("El usuario " . $user->name . " a sido borrado de forma exitosa","success");
      return redirect()->route('users.index');
    }


}
