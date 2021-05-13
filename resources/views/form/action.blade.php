@extends('layouts.form')

@section('title', $action)
 
@section('content')
    <div class="md:grid md:grid-cols-3 md:gap-6"> 
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-2xl text-gray-700 border-b border-gray-200 pb-2 font-bold">FINALIZAR</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Gracias por su interés y participación este formulario.
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-t-md ">
                <div class="grid grid-cols-6 gap-6">
                    @if ($action == 'cancel')
                        <div class="col-span-6 alert-interaccion">
                            <div class="bg-red-100 text-red-500 border-red-300 border-t-4 p-4 rounded-md shadow">
                                <p class="title font-bold">Gracias por su colaboración</p>
                                <p class="descripcion italic font-medium"><span class="not-italic font-normal">Ha decidido cancelar la encuesta, ya que no cumple con el perfil apropiado para el diligenciamiento de la misma, en caso contrario vuelva y haga clic en continuar.</span></p>
                            </div>
                        </div>
                    @else
                        <div class="col-span-6 alert-interaccion">
                            <div class="bg-orange-100 text-orange-500 border-orange-300 border-t-4 p-4 rounded-md shadow">
                                <div class="relative flex flex-row">
                                    <p class="title font-bold">Guardando encuesta</p>
                                    <span class="loader-sent inline-flex justify-center items-center ml-4">
                                        <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-orange-500 opacity-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                                    </span>
                                </div>
                                <p class="descripcion italic font-medium"><span class="not-italic font-normal">Por favor espere estamos procesando las respuestas del cuestionario.</span></p>
                            </div>
                        </div>
                    @endif
                    
                    <div class="col-span-6">
                        <div class="text-gray-500 text-justify">
                            <p class="descripcion">En caso de inquietudes, por favor comuníquese a:</p>
                            <a href="mailto:freddy.castro@correo.ugr.es?subject=Soporte%20formulario%20identificación%20muestra%20de%20textos%20escolares" target="_blank">
                                <div class="mt-0 flex items-center text-sm font-semibold ">
                                    <div class="text-blue-700">freddy.castro@correo.ugr.es</div>
                                    <div class="ml-1 text-blue-900">
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </div>
                                </div>
                            </a>
                            <p class="descripcion italic font-medium mt-3">Mientras enseño continúo buscando, indagando. Enseño porque busco, porque indagué, porque indago y me indagó. Investigo para comprobar, comprobando intervengo, interviniendo educo y me educo. Investigo para conocer lo que aún no conozco y comunicar o anunciar la novedad.</p>
                            <p class="descripcion italic font-bold mt-0 text-right">Paulo Freire.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-end px-4 py-3 bg-gray-200 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                <a href="{{ route( 'home' ) }}">
                    <button type="button" class="inline-flex items-center px-4 py-2 bg-blue-700 border border-transparent rounded-md font-bold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-blue disabled:opacity-25 transition ease-in-out duration-150">
                        VOLVER
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