@extends('layouts.form')

@section('title', 'Información personal')
 
@section('content')
    <div class="md:grid md:grid-cols-12 md:gap-6">
                
        <div class="md:col-span-1">
            {{-- <div class="px-4 sm:px-0">
                <h3 class="text-2xl text-gray-700 border-b border-gray-200 pb-2 font-bold">INFORMACIÓN COMPLEMENTARIA</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Información personal del docente.
                </p>
            </div> --}}
        </div>

        <div class="mt-5 md:mt-0 md:col-span-10">
            <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-t-md">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6">

                        <div class="col-span-6 mb-4">
                            <legend class="text-base font-medium text-gray-900">¿Estaría dispuest@ a ser posiblemente contactad@ para participar en una investigación educativa relacionada con la enseñanza del uso y gestión del agua en la educación formal básica secundaria (grado noveno) en Bogotá?.</legend>
                            <div class="mt-4 space-y-4">
                                <div class="flex items-center">
                                    <input id="dispocision_si" name="dispocision" value="1" type="radio" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                    <label for="dispocision_si" class="ml-3 block text-sm font-medium text-gray-700">Sí, deseo participar.</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="dispocision_no" name="dispocision" value="0" type="radio" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                    <label for="dispocision_no" class="ml-3 block text-sm font-medium text-gray-700">No por ahora.</label>
                                </div>
                            </div>
                            <div class="dispocision_error mt-2 ml-3 text-red-500 text-xs hidden">*Por favor seleccione una opcción.</div>
                        </div>

                        <section class="habeas">
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
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-center">
                                        <input id="contacto_si" name="contacto" value="1" type="radio" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                        <label for="contacto_si" class="ml-3 block text-sm font-medium text-gray-700">Sí, deseo participar.</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="contacto_no" name="contacto" value="0" type="radio" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                        <label for="contacto_no" class="ml-3 block text-sm font-medium text-gray-700">No por ahora.</label>
                                    </div>
                                </div>
                                <div class="contacto_error mt-2 ml-3 text-red-500 text-xs hidden">*Por favor seleccione una opcción.</div>
                            </div>
                        </section>

                        <section class="contactoform">
                            <div>
                                <div class="pt-1 pb-4">
                                    <div class="border-b border-gray-200"></div>
                                </div>
                            </div>
                            <div class="col-span-6">
                                <label from="nombre" class="block text-base font-medium text-gray-900">Nombre:</label>
                                <input id="nombre" name="nombre" type="text" class="capitalize block w-full mt-1 border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm" value="">
                                <div class="nombre_error mt-2 ml-3 text-red-500 text-xs hidden">*Por favor indique su nombre.</div>
                            </div>
                            <div>
                                <div class="pt-5 pb-4">
                                    <div class="border-b border-gray-200"></div>
                                </div>
                            </div>
                            <div class="col-span-6">
                                <label from="apellido" class="block text-base font-medium text-gray-900">Apellido:</label>
                                <input id="apellido" name="apellido" type="text" class="capitalize block w-full mt-1 border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm" value="">
                                <div class="apellido_error mt-2 ml-3 text-red-500 text-xs hidden">*Por favor indique su apellido.</div>
                            </div>
                            <div>
                                <div class="pt-5 pb-4">
                                    <div class="border-b border-gray-200"></div>
                                </div>
                            </div>
                            <div class="col-span-6">
                                <label from="correo" class="block text-base font-medium text-gray-900">Correo electrónico de contacto:</label>
                                <input id="correo" name="correo" type="text" class="lowercase block w-full mt-1 border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm" value="">
                                <div class="correo_error mt-2 ml-3 text-red-500 text-xs hidden">*Por favor indique su correo de contacto.</div>
                            </div>
                            <div>
                                <div class="pt-5 pb-4">
                                    <div class="border-b border-gray-200"></div>
                                </div>
                            </div>
                            <div class="col-span-6">
                                <label from="telefono" class="block text-base font-medium text-gray-900">Teléfono de contacto:</label>
                                <input id="telefono" name="telefono" type="text" maxlength="10" class="block w-full mt-1 border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm" value="">
                                <div class="telefono_error mt-2 ml-3 text-red-500 text-xs hidden">*Por favor indique su número telefónico de contacto.</div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-end px-4 py-3 bg-gray-200 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                <button type="button" class="enviar_btn inline-flex items-center px-4 py-2 bg-blue-700 border border-transparent rounded-md font-bold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-blue disabled:opacity-25 transition ease-in-out duration-150">
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
@endsection

@section('js')
    <script src="{{ asset('js/information.js') }}" defer></script>
@endsection