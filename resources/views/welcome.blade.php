@extends('layouts.form')

@section('title', 'Bienvenido')
 
@section('content')

    <div class="md:grid md:grid-cols-12 md:gap-6"> 
        <div class="md:col-span-1">
            {{-- <div class="px-4 sm:px-0">
                <h3 class="text-2xl text-gray-700 border-b border-gray-200 pb-2 font-bold">INTRUDUCCIÓN</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Lea atentamente y continúe solo si cumple con el perfil especificado.
                </p>
            </div> --}}
        </div>
        <div class="mt-5 md:mt-0 md:col-span-10">
            <div class="py-5 bg-white sm:py-6 shadow sm:rounded-t-md ">

                <div class="px-4 sm:px-6 grid grid-cols-6 gap-6">
                    <div class="col-span-6 alert-interaccion">
                        <div class="bg-blue-100 text-blue-500 border-blue-300 border-t-4 p-4 rounded-md shadow">
                            {{-- <p class="title font-bold">Cuestionario Identificación Muestra de Textos Escolares</p> --}}
                            <p class="title font-bold">Instrumento de identificación de los textos escolares de Ciencias Sociales / Ciencias Naturales frecuentemente empleados como apoyo al quehacer pedagógico de los docentes bogotanos de grado noveno durante los años 2017 a 2021.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-5 bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6 border-b border-t">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="">Dirigido a:</a></div>
                        </div>
                        <div class="mt-2 text-sm text-gray-500 text-justify">
                            Docentes que hayan orientado asignaturas de ciencias naturales o de ciencias sociales en grado noveno (9º) en por lo menos uno de los últimos cinco años (2017-2021) en Bogotá.
                        </div>
                    </div>
                
                    <div class="p-6 border-gray-200 md:border-l border-b border-t">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" /></svg>
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Objetivo:</div>
                        </div>
                        <div class="mt-2 text-sm text-gray-500 text-justify">
                            Identificar los textos escolares de Ciencias Sociales y Ciencias Naturales frecuentemente empleados como apoyo al quehacer pedagógico de los docentes bogotanos de grado noveno durante los años 2017 a 2021.
                        </div>
                    </div>
                </div>
                <div class="mb-5 bg-gray-200 bg-opacity-25 grid grid-cols-1">
                    <div class="p-6 border-gray-200 border-b">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Extensión y duración:</div>
                        </div>
                        <div class="mt-2 text-sm text-gray-500 text-justify">
                            Este instrumento está compuesto por siete (7) preguntas y su diligenciamiento toma aproximadamente entre tres y cinco (3 a 5) minutos.
                        </div>
                    </div>
                </div>
                <div class="px-4 sm:px-6 grid grid-cols-6 gap-6">
                    <div class="col-span-6">
                        <div class="text-gray-500 text-justify">
                            <p class="descripcion italic font-medium mt-3">Su participación es voluntaria y no tiene ningún riesgo, ya que el cuestionario es de carácter anónimo y sus resultados serán utilizados para fines estadísticos. A su vez, usted tendrá derecho a conocer los resultados cuando finalice la investigación. Como este cuestionario es de carácter anónimo, únicamente se divulgarán los resultados. La información se manejará según la Ley 1581 del 2012 del Habeas Data y se empleará únicamente en esta investigación educativa.</p>
                            <p class="descripcion font-bold mt-3">Usted ha leído el objetivo de este instrumento y acepta que al diligenciarlo otorga implícitamente su consentimiento para participar en el estudio.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-end px-4 py-3 bg-gray-200 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                <a href="{{ route( 'form.action', 'cancel' ) }}">
                    <button type="button" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-bold text-xs text-white uppercase tracking-widest hover:bg-red-400 active:bg-red-900 focus:outline-none focus:border-red-900 focus:shadow-outline-red disabled:opacity-25 transition ease-in-out duration-150 mr-4">
                        CANCELAR
                    </button>
                </a>
                <a href="{{ route( 'form.institution' ) }}">
                    <button type="button" class="inline-flex items-center px-4 py-2 bg-blue-700 border border-transparent rounded-md font-bold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-blue disabled:opacity-25 transition ease-in-out duration-150">
                        CONTINUAR
                    </button>
                </a>
            </div>
        </div>
    </div>
    <div>
        <div class="py-8">
            <div class="border-t border-gray-200"></div>
        </div>
    </div>
@endsection