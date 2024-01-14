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
    <header class="flex items-center justify-between w-full px-3 py-1 bg-gray-100">
        <h1 class="text-3xl font-black">DevStagram</h1>
        <nav class="flex text-sm font-bold text-gray-600 gap-x-5">
        <!--Acara ira una navegacion-->
        </nav>
         </header>


         @if (session("mensaje"))
            <p class="text-white bg-red-600">{{session("mensaje")}}</p>
         @endif

         <main class="flex flex-row items-center justify-center w-full mt-10 ">

           <img src="{{asset("img/coding.jpg")}}" alt="" class="w-72 h-96">
            <form action="{{route("login")}}"class="flex flex-col items-center px-1 py-2 bg-slate-200 w-72 h-96 " method="POST">
                <!--la siguiente utilidad nos ayuda para los ataque cross site request-->
                @csrf
                <h1 class="mb-4 text-2xl font-black">DevStagram</h1>
                <label for="" class="w-8/12">Email</label>
                <input type="text" name="email" id="email" class="w-8/12">
                <label for="" class="w-8/12">Contraseña</label>
                <input type="text" name="password" id="password" class="w-8/12">

                <button type="submit" class="w-8/12 mt-10 text-white bg-blue-600 hover:bg-sky-600">Iniciar seccion</button>
            </form>

         </main>
</body>
</html>
