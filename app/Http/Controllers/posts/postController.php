<?php

namespace App\Http\Controllers\posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function __construct(){
        $this->middleware("auth");
    }

    public function create(){
        return view("posts.create");
    }
}
