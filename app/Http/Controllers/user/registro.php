<?php

namespace App\Http\Controllers\user;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class registro extends Controller
{
    //index -> para gets
    //store -> para post
    //destroy -> para delete

    public function index(){
        return view("auth.registro");
    }


    public function store(Request $request){//pasamos request para recibir las peticiones


        //Validaremos el username
        $request->request->add(["username" => Str::slug($request->username)]);
         //validaremos los datos con lo que nos da laravel
         $this->validate($request, [
             "nombre"=>"required",
             "username"=>"required|unique:users|min:3|max:30",
             "password"=> "required",
             "email"=>"required|unique:users",
         ]);

         //usaremos nuestro modelo para agregar usuarios

        User::create([
            "name"=>$request->nombre,
            "username"=>$request->username,
            "password"=>Hash::make($request->password),
            "email"=>$request->email//para hashear el password
        ]);

        //laravel nos proporciona algo para autenticar el usuario
        auth()->attempt($request->only("email","password"));

        //laravel ya viene algo includo para redirecionar
        return redirect()->route("home");
    }
}
