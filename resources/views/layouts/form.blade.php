<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
    <meta name='author' href="" email="" content='Julio Cesar Calderón Garcia - Desarrollador Multimedia'>
    <meta name="description" content="Aplicativo empresarial de Evaluación">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" href="{{ asset( 'img/imecEvaTitle.png' ) }}"/>
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset( 'css/footer.css' ) }}">
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>

</head>
<body class="antialiased h-full bg-gray-100">
    <div class="flex flex-col h-screen">

        <header>
            <div class="fixed w-full z-10">   
                <nav class="shadow-lg bg-gradient-to-r from-blue-600 to-blue-900">
                    <div class="max-w-full mx-auto px-2 sm:px-6 lg:px-8">
                        <div class="relative flex items-center justify-between h-16">
                            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                                <a href="/" class="flex-shrink-0 flex items-center">
                                    <img class="shadow-lg rounded-full block h-10 w-auto" src="{{ asset('img/logo.svg') }}" alt="Workflow">
                                    <p class="font-mada text-white text-3xl ml-3">Form<span class="font-bold">Imte</span></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <main class="flex-grow">
            <div class="max-w-7xl mx-auto pt-10 sm:px-6 lg:px-8">
                <div class="h-14"></div>
                @yield('content')
            </div>
        </main>
        
        <footer class="footer pt-12 w-full">
            <div class="container mx-auto pb-12">
                <div class="grid grid-cols-12 gap-y-5 md:items-center">
                    <div class="col-span-12 md:col-span-4">
                        <div class="grid grid-col-12 justify-items-center md:justify-items-end gap-y-2">
                            <div class="col-span-12 flex items-center gap-y-3">
                                <img class="h-12 w-auto" src="{{ asset('img/logo.svg') }}" alt="ImecEva">
                                <h5 class="font-mada text-white text-5xl ml-3">Ad<span class="text-yellow-400 font-bold">Form</span></h5>
                            </div>
                            <div class="col-span-12">
                                <p class="text-white opacity-75 leading-tight text-center md:text-right">Instrumento de identificación<br> de textos escolares.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-8">
                        <div class="grid grid-cols-12 justify-items-center items-center">
                            <div class="col-span-6 text-left text-white">
                                <h5 class="ml-3 font-bold">Acceso</h5>
                                <ul class="ml-3">
                                    @if (Route::has('login'))
                                        @auth
                                            <li> <a href="{{ url('/dashboard') }}" class="grey-text text-lighten-3">Dashboard</a></li>
                                            @else
                                            <li><a href="{{ route('login') }}" class="grey-text text-lighten-3">Administrar</a></li>
                                        @endauth
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-copyright">
                <div class="container mx-auto py-4 relative md:flex flex-row items-center w-full justify-between">
                    <p class="font-normal text-white opacity-50 text-left text-xs ml-3">© 2021 Glaucus Diseño y Desarrollo Digital</p>
                    <p class="font-normal text-white opacity-40 md:text-right text-xs ml-3 md:mr-3 "> AdForm echo con <span class="inline-flex justify-center items-end text-red-600"><svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fillRule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clipRule="evenodd" /></svg></span></p>
                </div>
            </div>
        </footer>
    </div>
    @livewireScripts
    @yield('js')
</body>
</html>
