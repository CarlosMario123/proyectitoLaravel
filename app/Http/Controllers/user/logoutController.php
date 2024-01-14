<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class logoutController extends Controller
{
    //
    public function __invoke(){
        auth()->logout();//Cierra seccion
        return redirect()->route('login');
    }
}
