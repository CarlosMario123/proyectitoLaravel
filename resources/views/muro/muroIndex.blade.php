@extends('layouts.app');

@section('titulo')
Perfil del usuario
@endsection
@section('contenido')
<div class="flex items-center">

    <div class="flex items-center h-32 px-8 py-1 shadow-sm shadow-black bg-slate-100 gap-x-2">
        <div>
            <img src="{{asset("img/user.png")}}" alt="" class="h-10 10">
            <p class="text-xl">{{$user->username}}</p>
        </div>

        <div class="flex flex-col items-center">

            <p class="text-blue-950">Seguidores 0</p>
            <p class="text-blue-950">Seguidos</p>
            <p class="text-blue-950">Post 0</p>
        </div>

    </div>
</div>
@endsection
