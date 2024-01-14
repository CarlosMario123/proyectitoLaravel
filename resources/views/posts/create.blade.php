@extends('layouts.app')

@section('titulo')
Crea tus post
@endsection

@section('contenido')
<main class="flex flex-col items-center w-full py-10">
    <form action="" method="POST" class="flex flex-col items-center rounded-md shadow-sm shadow-black bg-slate-100 w-96">
        <div class="w-full h-10 mb-4 bg-sky-300 rounded-t-md">

        </div>
        @csrf
        <div class="flex flex-col items-center w-full">
            <label for="titulo" class="block mb-2 font-medium text-gray-600">Título</label>
            <input type="text" name="titulo" id="titulo" class="">
        </div>
        <div class="flex flex-col items-center w-full">
            <label for="descripcion" class="block mb-2 font-medium text-gray-600">Descripción</label>
            <textarea name="descripcion" id="descripcion" rows="4" class="w-8/12"></textarea>
        </div>
        <button type="submit" class="w-64 px-6 py-2 my-5 text-white rounded-md bg-sky-500 hover:bg-sky-600 focus:outline-none">Crear Post</button>
    </form>

</main>
@endsection
