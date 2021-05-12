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
    <title>{{ config('app.name', 'Form') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset( 'css/footer.css' ) }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="antialiased">
    <div class="min-h-screen bg-gray-100">

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

        <div class="max-w-7xl mx-auto pt-10 sm:px-6 lg:px-8">
            <div class="h-14"></div>

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

                <div class="md:grid md:grid-cols-3 md:gap-6">
                    
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-2xl text-gray-700 border-b border-gray-200 pb-2 font-bold">ASIGNATURA E INSTITUCIÓN</h3>
                            <p class="mt-1 text-sm text-gray-600">
                                Seleccione la asignatura y la institución donde es o fue docente.
                            </p>
                        </div>
                    </div>
                
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-t-md">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6"> 

                                    <div class="col-span-6 mb-4">
                                        <legend class="text-base font-medium text-gray-900">Usted es docente de:</legend>
                                        <p class="text-gray-500 text-xs">Seleccione la asignatura que más ha orientado:</p>

                                        <div class="mt-4 space-y-4">
                                            <div class="flex items-center">
                                                <input id="push_everything" name="push_notifications" type="radio" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                                <label for="push_everything" class="ml-3 block text-sm font-medium text-gray-700">Ciencias Sociales</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="push_email" name="push_notifications" type="radio" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                                <label for="push_email" class="ml-3 block text-sm font-medium text-gray-700">Ciencias Naturales</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="pt-1 pb-4">
                                            <div class="border-b border-gray-200"></div>
                                        </div>
                                    </div>

                                    <div class="col-span-6 mb-4">
                                        <label from="tipoins" class="block text-base font-medium text-gray-900">La institución educativa en que se desempeña(ó) como docente es:</label>
                                        <select id="tipoins" name="tipoins" class="mt-1 block w-full form-select border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                            <option value="0" disable class="text-gray-400 bg-gray-100">Seleccione un tipo de institución</option>
                                            <option value="1">Jefe</option>
                                            <option value="2">Par</option>
                                            <option value="3">Subordinado</option>
                                        </select>
                                        @error('tipoins')
                                            <p class="text-red-500 font-light text-sm ml-4"></p>
                                        @enderror
                                    </div>

                                    <div>
                                        <div class="pt-1 pb-4">
                                            <div class="border-b border-gray-200"></div>
                                        </div>
                                    </div>

                                    <div class="col-span-6 mb-4">
                                        <label from="localidad" class="block text-base font-medium text-gray-900">En qué localidad se encuentra ubicada la institución:</label>
                                        <select id="localidad" name="localidad" class="mt-1 block w-full form-select border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                            <option value="0" disable class="text-gray-400 bg-gray-100">Seleccione una localidad</option>
                                            <option value="1">Jefe</option>
                                            <option value="2">Par</option>
                                            <option value="3">Subordinado</option>
                                        </select>
                                        @error('localidad')
                                        <p class="text-red-500 font-light text-sm ml-4"></p>
                                        @enderror
                                    </div>

                                    <div>
                                        <div class="pt-1 pb-4">
                                            <div class="border-b border-gray-200"></div>
                                        </div>
                                    </div>

                                    <div class="col-span-6">
                                        <label from="nombreins" class="block text-base font-medium text-gray-900">Nombre de la institución en la que labora(ó):</label>
                                        <input id="nombreins" name="nombreins" type="text" class="block w-full mt-1 border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm" value="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-end px-4 py-3 bg-gray-200 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                            <button type="button" class="inline-flex items-center px-4 py-2 bg-blue-700 border border-transparent rounded-md font-bold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-blue disabled:opacity-25 transition ease-in-out duration-150">
                                Siguiente
                            </button>
                        </div>
                    </div>
                </div>
            
                <div>
                    <div class="py-8">
                        <div class="border-t border-gray-200"></div>
                    </div>
                </div>

                <div class="md:grid md:grid-cols-3 md:gap-6">
                
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-2xl text-gray-700 border-b border-gray-200 pb-2 font-bold">AÑOS</h3>
                            <p class="mt-1 text-sm text-gray-600">
                                Seleccione el o los años en que ha orientado la asignatura.
                            </p>
                        </div>
                    </div>
            
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-t-md">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6">

                                    <div class="col-span-6 mb-4">
                                        <legend class="text-base font-medium text-gray-900">Seleccione el o los años en que ha orientado la asignatura:</legend>

                                        <div class="flex items-start mt-2">
                                            <div class="flex items-center h-5">
                                                <input id="veintiuno" name="veintiuno" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="veintiuno" class="font-medium text-gray-700">2021</label>
                                                <p class="text-gray-500 text-xs">Seleccione solo si ha orientado la asignatura en este año.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div>
                                        <div class="pt-1 pb-4">
                                            <div class="border-b border-gray-200"></div>
                                        </div>
                                    </div>

                                    <div class="col-span-6 mb-4">
                                        <div class="flex items-start mt-2">
                                            <div class="flex items-center h-5">
                                                <input id="veinte" name="veinte" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="veinte" class="font-medium text-gray-700">2020</label>
                                                <p class="text-gray-500 text-xs">Seleccione solo si ha orientado la asignatura en este año.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="pt-1 pb-4">
                                            <div class="border-b border-gray-200"></div>
                                        </div>
                                    </div>

                                    <div class="col-span-6 mb-4">
                                        <div class="flex items-start mt-2">
                                            <div class="flex items-center h-5">
                                                <input id="diecinueve" name="diecinueve" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="diecinueve" class="font-medium text-gray-700">2019</label>
                                                <p class="text-gray-500 text-xs">Seleccione solo si ha orientado la asignatura en este año.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="pt-1 pb-4">
                                            <div class="border-b border-gray-200"></div>
                                        </div>
                                    </div>

                                     <div class="col-span-6 mb-4">
                                        <div class="flex items-start mt-2">
                                            <div class="flex items-center h-5">
                                                <input id="dieciocho" name="dieciocho" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="dieciocho" class="font-medium text-gray-700">2018</label>
                                                <p class="text-gray-500 text-xs">Seleccione solo si ha orientado la asignatura en este año.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="pt-1 pb-4">
                                            <div class="border-b border-gray-200"></div>
                                        </div>
                                    </div>
                                    
                                     <div class="col-span-6 mb-4">
                                        <div class="flex items-start mt-2">
                                            <div class="flex items-center h-5">
                                                <input id="diecisiete" name="diecisiete" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="diecisiete" class="font-medium text-gray-700">2017</label>
                                                <p class="text-gray-500 text-xs">Seleccione solo si ha orientado la asignatura en este año.</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-end px-4 py-3 bg-gray-200 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                            <button type="button" class="inline-flex items-center px-4 py-2 bg-blue-700 border border-transparent rounded-md font-bold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-blue disabled:opacity-25 transition ease-in-out duration-150">
                                Siguiente
                            </button>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="py-8">
                        <div class="border-t border-gray-200"></div>
                    </div>
                </div>


                <div class="md:grid md:grid-cols-3 md:gap-6">
                
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-2xl text-gray-700 border-b border-gray-200 pb-2 font-bold">2021</h3>
                            <p class="mt-1 text-sm text-gray-600">
                                Indique el texto o el recurso empleado para el año 2021.
                            </p>
                        </div>
                    </div>
            
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-t-md">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6">

                                    <div class="col-span-6 mb-4">
                                        <legend class="text-base font-medium text-gray-900">Indique el nombre del texto o recurso con el que ha orientado la asignatura.</legend>

                                        <div class="flex items-start mt-2">
                                            <div class="flex items-center h-5">
                                                <input id="veintiuno" name="veintiuno" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="veintiuno" class="font-medium text-gray-700">No emplee ningún texto escolar.</label>
                                                <p class="text-gray-500 text-xs">Seleccione solo si no empleo ningún texto escolar en el año 2021.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div>
                                        <div class="pt-1 pb-4">
                                            <div class="border-b border-gray-200"></div>
                                        </div>
                                    </div>

                                    <div class="col-span-6">
                                        <label from="nombreins" class="block text-base font-medium text-gray-900">Nombre del texto escolar:</label>
                                        <input id="nombreins" name="nombreins" type="text" class="block w-full mt-1 border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm" value="">
                                    </div>

                                    <div>
                                        <div class="pt-5 pb-4">
                                            <div class="border-b border-gray-200"></div>
                                        </div>
                                    </div>

                                   <div class="col-span-6 mb-4">
                                        <label from="localidad" class="block text-base font-medium text-gray-900">Editorial:</label>
                                        <select id="localidad" name="localidad" class="mt-1 block w-full form-select border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                            <option value="0" disable class="text-gray-400 bg-gray-100">Seleccione una editorial</option>
                                            <option value="1">Jefe</option>
                                            <option value="2">Par</option>
                                            <option value="3">Subordinado</option>
                                        </select>
                                        @error('localidad')
                                        <p class="text-red-500 font-light text-sm ml-4"></p>
                                        @enderror
                                    </div>

                                    <div class="col-span-6">
                                        <label from="nombreins" class="block text-base font-medium text-gray-900">¿Cual?:</label>
                                        <input id="nombreins" name="nombreins" type="text" class="block w-full mt-1 border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm" value="">
                                    </div>

                                    <div>
                                        <div class="pt-5 pb-4">
                                            <div class="border-b border-gray-200"></div>
                                        </div>
                                    </div>

                                    <div class="col-span-6">
                                        <label from="nombreins" class="block text-base font-medium text-gray-900">Año de edición <span class="text-gray-400 text-xs">(YYYY)</span></label>
                                        <input id="nombreins" name="nombreins" type="number" class="block w-full mt-1 border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm" value="">
                                    </div>

                                    <div>
                                        <div class="pt-5 pb-4">
                                            <div class="border-b border-gray-200"></div>
                                        </div>
                                    </div>

                                   <div class="col-span-6 mb-4">
                                        <label from="localidad" class="block text-base font-medium text-gray-900">Recurso frecuente más empleado:</label>
                                        <select id="localidad" name="localidad" class="mt-1 block w-full form-select border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                            <option value="0" disable class="text-gray-400 bg-gray-100">Seleccione un recurso</option>
                                            <option value="1">Jefe</option>
                                            <option value="2">Par</option>
                                            <option value="3">Subordinado</option>
                                        </select>
                                        @error('localidad')
                                        <p class="text-red-500 font-light text-sm ml-4"></p>
                                        @enderror
                                    </div>

                                    <div class="col-span-6">
                                        <label from="nombreins" class="block text-base font-medium text-gray-900">¿Cual?:</label>
                                        <input id="nombreins" name="nombreins" type="text" class="block w-full mt-1 border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm" value="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-end px-4 py-3 bg-gray-200 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-700 border border-transparent rounded-md font-bold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-blue disabled:opacity-25 transition ease-in-out duration-150">
                                Enviar
                            </button>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="py-8">
                        <div class="border-t border-gray-200"></div>
                    </div>
                </div>

            
                <div class="md:grid md:grid-cols-3 md:gap-6">
                
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-2xl text-gray-700 border-b border-gray-200 pb-2 font-bold">INFORMACIÓN COMPLEMENTARIA</h3>
                            <p class="mt-1 text-sm text-gray-600">
                                Información personal del docente.
                            </p>
                        </div>
                    </div>
            
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-t-md">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6">

                                    <div class="col-span-6 mb-4">
                                        <label from="localidad" class="block text-base font-medium text-gray-900">Género:</label>
                                        <select id="localidad" name="localidad" class="mt-1 block w-full form-select border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                            <option value="0" disable class="text-gray-400 bg-gray-100">Seleccione un género</option>
                                            <option value="1">Jefe</option>
                                            <option value="2">Par</option>
                                            <option value="3">Subordinado</option>
                                        </select>
                                        @error('localidad')
                                        <p class="text-red-500 font-light text-sm ml-4"></p>
                                        @enderror
                                    </div>

                                    <div>
                                        <div class="pt-1 pb-4">
                                            <div class="border-b border-gray-200"></div>
                                        </div>
                                    </div>

                                    <div class="col-span-6 mb-4">
                                        <legend class="text-base font-medium text-gray-900">¿Estaría dispuest@ a ser posiblemente contactad@ para participar en una investigación educativa relacionada con la enseñanza del uso y gestión del agua en la educación formal básica secundaria (grado noveno) en Bogotá?.</legend>

                                        <div class="flex items-start mt-2">
                                            <div class="flex items-center h-5">
                                                <input id="veintiuno" name="veintiuno" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="veintiuno" class="font-medium text-gray-700">Sí, deseo participar.</label>
                                            </div>
                                        </div>

                                        <div class="flex items-start mt-2">
                                            <div class="flex items-center h-5">
                                                <input id="veintiuno" name="veintiuno" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="veintiuno" class="font-medium text-gray-700">No por ahora.</label>
                                            </div>
                                        </div>

                                    </div>

                                    <div>
                                        <div class="pt-1 pb-4">
                                            <div class="border-b border-gray-200"></div>
                                        </div>
                                    </div>

                                    <div class="col-span-6 alert-interaccion mb-5">
                                        <div class="bg-blue-100 text-blue-500 border-blue-300 border-t-4 p-4 rounded-md shadow">
                                            <p class="title font-bold">Habeas Data</p>
                                            <p class="descripcion italic font-medium text-justify"><span class="not-italic font-normal">Los datos solicitados a continuación serán manejados confidencialmente y serán empleados con el único propósito de contactarl@ posteriormente para una investigación que busca profundizar en la enseñanza del uso y gestión del agua en la educación formal básica secundaria (grado noveno) en Bogotá. La información suministrada a continuación está sujeta al manejo de la información según la Ley 1581 del 2012 del Habeas Data.</span></p>
                                        </div>
                                    </div>

                                    <div class="col-span-6 mb-4">
                                        <legend class="text-base font-medium text-gray-900">Desea suministrar sus nombres y apellidos, dirección de correo electrónico y número telefónico de contacto, otorgando implícitamente su consentimiento para establecer una posible comunicación para los fines descritos.</legend>

                                        <div class="flex items-start mt-2">
                                            <div class="flex items-center h-5">
                                                <input id="veintiuno" name="veintiuno" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="veintiuno" class="font-medium text-gray-700">Si.</label>
                                            </div>
                                        </div>

                                        <div class="flex items-start mt-2">
                                            <div class="flex items-center h-5">
                                                <input id="veintiuno" name="veintiuno" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="veintiuno" class="font-medium text-gray-700">No.</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="pt-1 pb-4">
                                            <div class="border-b border-gray-200"></div>
                                        </div>
                                    </div>

                                    <div class="col-span-6">
                                        <label from="nombreins" class="block text-base font-medium text-gray-900">Nombre:</label>
                                        <input id="nombreins" name="nombreins" type="text" class="block w-full mt-1 border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm" value="">
                                    </div>

                                    <div>
                                        <div class="pt-5 pb-4">
                                            <div class="border-b border-gray-200"></div>
                                        </div>
                                    </div>

                                    <div class="col-span-6">
                                        <label from="nombreins" class="block text-base font-medium text-gray-900">Apellido:</label>
                                        <input id="nombreins" name="nombreins" type="text" class="block w-full mt-1 border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm" value="">
                                    </div>

                                    <div>
                                        <div class="pt-5 pb-4">
                                            <div class="border-b border-gray-200"></div>
                                        </div>
                                    </div>

                                    <div class="col-span-6">
                                        <label from="nombreins" class="block text-base font-medium text-gray-900">Correo electrónico de contacto:</label>
                                        <input id="nombreins" name="nombreins" type="email" class="block w-full mt-1 border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm" value="">
                                    </div>

                                    <div>
                                        <div class="pt-5 pb-4">
                                            <div class="border-b border-gray-200"></div>
                                        </div>
                                    </div>

                                    <div class="col-span-6">
                                        <label from="nombreins" class="block text-base font-medium text-gray-900">Teléfono de contacto:</label>
                                        <input id="nombreins" name="nombreins" type="tel" class="block w-full mt-1 border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm" value="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-end px-4 py-3 bg-gray-200 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-700 border border-transparent rounded-md font-bold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-blue disabled:opacity-25 transition ease-in-out duration-150">
                                Enviar
                            </button>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="py-8">
                        <div class="border-t border-gray-200"></div>
                    </div>
                </div>



        </div>
        
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
</body>
</html>
