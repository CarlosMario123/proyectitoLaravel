<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white">

    <header class="flex items-center justify-between w-full px-3 py-1 bg-gray-100">
   <h1 class="text-3xl font-black">DevStagram</h1>
   <nav class="flex items-center text-sm font-bold text-gray-600 gap-x-5">
    <a href="post/create" class="flex items-center gap-x-1">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z" />
          </svg>
          Crear Post
    </a>
    <a href="/">Principal</a>
    <a href="{{ route('muro',auth()->user()->username) }}">Perfil</a>
    <a href="/logout">Cerrar seccion</a>
   </nav>
    </header>

    <main class="flex flex-col w-full px-3 mt-6">
        <h2 class="w-full text-2xl font-black text-center"> @yield('titulo')</h2>
       @yield("contenido")
    </main>

    <footer class="flex justify-end w-full px-3">
        {{--vamos agregar codigo php con esa directiva --}}
        Derechos reservados
         {{now()->format("y-m-d")}} {{--podemos checar en los helpers de laravel --}}
    </footer>
</body>
</html>
