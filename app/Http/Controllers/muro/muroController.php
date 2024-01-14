<?php

namespace App\Http\Controllers\muro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class muroController extends Controller
{
    //
    public function __construct(){
        $this->middleware("auth");//hacemos que ejecute el middleware de auth
    }

    public function index(User $user){

        //pasamo el user al muro
    return view("muro.muroIndex",["user"=>$user]);
    }
}
