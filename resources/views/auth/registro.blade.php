<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white">
    <header class="bg-gray-100 flex w-full items-center justify-between px-3 py-1">
        <h1 class="text-3xl font-black">DevStagram</h1>
        <nav class="flex gap-x-5 text-gray-600 font-bold text-sm">
        <!--Acara ira una navegacion-->
        </nav>
         </header>


         <main class="w-full flex flex-row items-center justify-center mt-10 ">
           <img src="{{asset("img/coding.jpg")}}" alt="" class="w-72 h-96">
            <form action="{{route("registro")}}" class="bg-slate-200 w-72 h-96 flex-col flex items-center px-1 py-2 " method="POST">
                <!--la siguiente utilidad nos ayuda para los ataque cross site request-->
                @csrf
                <h1 class="font-black text-2xl mb-4">DevStagram</h1>
                <label for="" class="w-8/12">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="w-8/12">
                  @error('nombre')<!--con esto podemos enviar errores-->
                  <p class="text-sm text-red-500">{{$message}}</p>
                  @enderror
                <label for="" class="w-8/12 mt-2">username</label>
                <input type="text" name="username" id="username" class="w-8/12">
                @error('username')<!--con esto podemos enviar errores-->
                <p class="text-sm text-red-500">{{$message}}</p>
                @enderror
                <label for="" class="w-8/12 mt-2">email</label>
                <input type="email" name="email" id="email" class="w-8/12">
                @error('email')<!--con esto podemos enviar errores-->
                <p class="text-sm text-red-500">{{$message}}</p>
                @enderror
                <label for="" class="w-8/12 mt-2">password</label>
                <input type="password" name="password" id="password" class="w-8/12">
                @error('password')<!--con esto podemos enviar errores-->
                <p class="text-sm text-red-500">{{$message}}</p>
                @enderror
                <button type="submit" class="bg-blue-600 text-white w-8/12 mt-10 hover:bg-sky-600">Registrarse</button>
            </form>

         </main>
</body>
</html>
