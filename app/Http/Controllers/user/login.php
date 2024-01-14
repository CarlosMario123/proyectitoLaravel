<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class login extends Controller
{

    function __construct(){

    }
    //
    public function index(){


        return view("auth.login");
    }

    public function store(Request $request){


        //validamos los datos
        $this->validate($request,[
            "password"=> "required",
            "email"=>"required|email",
        ]);


        if(!auth()->attempt($request->only("email","password"))){
            return redirect()->route('login')->with('mensaje', 'credenciales invalidas');
    }else{
         return redirect()->route("home");

    }

    }
}
