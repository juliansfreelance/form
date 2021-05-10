<div class="p-6 sm:px-20 cardTitulo border-b border-gray-200 text-white text-center">
    <div class="mx-auto">
        <x-jet-application-logo class="pt-4 mx-auto w-1/4 sm:w-1/5 lg:w-1/6 shadow-lg rounded-full" />
    </div>

    <div class="mt-8 text-2xl leading-none mb-3">
        Bienvenido, <span class="font-bold">{{ ucwords(strtolower(auth()->user()->name))  }}</span>
    </div>
    <div class="text-xl leading-none mb-4 font-bold">
        Bienvenido a Ad<span class="font-bold">Form</span> es el panel de control para el formulario.<br>Es donde crea y administra el contenido de cada item
    </div>
    <div class="text-s leading-none"></div>
</div>

<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div class="text-gray-600">
        <p class="text-center mb-4 leading-tight text-lg font-bold">Instrumento de identificación de los textos escolares de Ciencias Sociales / Ciencias Naturales frecuentemente empleados como apoyo al quehacer pedagógico de los docentes bogotanos de grado noveno durante los años 2017 a 2021 </p>
    </div>
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 ">
    <div class="p-6 border-b">
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="">Administración</a></div>
        </div>
        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500 text-justify">
                En este panel administrativo está dispuesta para que usted pueda agregar, actualizar, editar y eliminar información de cada campo del formulario de una manera muy sencilla.
            </div>
            {{-- <a href="">
                <div class="mt-3 flex items-center text-sm font-semibold text-blue-700">
                    <div>Realizar evaluación ahora</div>
                    <div class="ml-1 text-blue-900">
                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </div>
                </div>
            </a> --}}
        </div>
    </div>

    <div class="p-6 border-gray-200 md:border-l border-b">
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400"><path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="{{ route('profile.show') }}">Autenticación</a></div>
        </div>
        
        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500 text-justify">
                Usamos cookies o tecnologías similares para almacenar, acceder y procesar datos de inicio de sesión e información de tus dispositivos; al navegar en este sitio aceptas el uso de cookies, nuestros términos y condiciones como también nuestras políticas de privacidad y tratamiento de datos.
            </div>
            <a href="{{ route('profile.show') }}">
                <div class="mt-3 flex items-center text-sm font-semibold text-blue-700">
                    <div>Revisar ahora</div>
                    <div class="ml-1 text-blue-900">
                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
