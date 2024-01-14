<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\registro;
use App\Http\Controllers\muro\muroController;
use App\Http\Controllers\user\login;
use App\Http\Controllers\user\logoutController;
use App\Http\Controllers\posts\postController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name("home")->middleware("auth");

Route::get("/registro",[registro::class,"index"])->name("registro");
Route::post("/registro",[registro::class,"store"]);



//login
Route::get("/login",[login::class,"index"])->name("login");
Route::post("/login",[login::class,"store"])->name("login");

//logout
Route::get("/logout",logoutController::class)->name("logout");

//muro
Route::get("/{user:username}",[muroController::class,"index"])->name("muro");

//post
Route::get("/post/create",[postController::class,"create"])->name("posts");
