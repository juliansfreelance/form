@extends('layouts.form')

@section('title', 'Bienvenido')
 
@section('content')

    <div class="md:grid md:grid-cols-3 md:gap-6"> 
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-2xl text-gray-700 border-b border-gray-200 pb-2 font-bold">INTRUDUCCIÓN</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Lea atentamente y continúe solo si cumple con el perfil especificado.
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-t-md ">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 alert-interaccion">
                        <div class="bg-blue-100 text-blue-500 border-blue-300 border-t-4 p-4 rounded-md shadow">
                            <p class="title font-bold">Cuestionario Identificación Muestra de Textos Escolares</p>
                            <p class="descripcion italic font-medium"><span class="not-italic font-normal">Instrumento de identificación de los textos escolares de Ciencias Sociales / Ciencias Naturales frecuentemente empleados como apoyo al quehacer pedagógico de los docentes bogotanos de grado noveno durante los años 2017 a 2021.</span></p>
                        </div>
                    </div>
                    <div class="col-span-6">
                        <div class="text-gray-500 text-justify">
                            <p class="title font-bold">Dirigido a:</p>
                            <p class="descripcion italic font-medium"><span class="not-italic font-normal">Docentes que hayan orientado asignaturas de ciencias naturales o de ciencias sociales en grado noveno (9º) en por lo menos uno de los últimos cinco años (2017-2021) en Bogotá.</span></p>
                            <p class="title font-bold mt-3">Objetivo:</p>
                            <p class="descripcion italic font-medium"><span class="not-italic font-normal">Identificar los textos escolares de Ciencias Sociales y Ciencias Naturales frecuentemente empleados como apoyo al quehacer pedagógico de los docentes bogotanos de grado noveno durante los años 2017 a 2021.</span></p>
                            <p class="title font-bold mt-3">Extensión y duración:</p>
                            <p class="descripcion italic font-medium"><span class="not-italic font-normal">Este instrumento está compuesto por siete (7) preguntas y su diligenciamiento toma aproximadamente entre tres y cinco (3 a 5) minutos.</span></p>
                            <p class="descripcion italic font-medium mt-3">Su participación es voluntaria y no tiene ningún riesgo, ya que el cuestionario es de carácter anónimo y sus resultados serán utilizados para fines estadísticos. A su vez, usted tendrá derecho a conocer los resultados cuando finalice la investigación. Como este cuestionario es de carácter anónimo, únicamente se divulgarán los resultados. La información se manejará según la Ley 1581 del 2012 del Habeas Data y se empleará únicamente en esta investigación educativa.</p>
                            <p class="descripcion font-bold mt-3">Usted ha leído el objetivo de este instrumento y acepta que al diligenciarlo otorga implícitamente su consentimiento para participar en el estudio.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-end px-4 py-3 bg-gray-200 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                <button type="button" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-bold text-xs text-white uppercase tracking-widest hover:bg-red-400 active:bg-red-900 focus:outline-none focus:border-red-900 focus:shadow-outline-red disabled:opacity-25 transition ease-in-out duration-150 mr-4">
                    CANCELAR
                </button>
                <button type="button" class="inline-flex items-center px-4 py-2 bg-blue-700 border border-transparent rounded-md font-bold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-blue disabled:opacity-25 transition ease-in-out duration-150">
                    CONTINUAR
                </button>
            </div>
        </div>
    </div>
    <div>
        <div class="py-8">
            <div class="border-t border-gray-200"></div>
        </div>
    </div>
@endsection