@extends('layouts.form')

@section('title', 'Años')
 
@section('content')

    <div class="md:grid md:grid-cols-12 md:gap-6">
         
        <div class="md:col-span-1">
            {{-- <div class="px-4 sm:px-0">
                <h3 class="text-2xl text-gray-700 border-b border-gray-200 pb-2 font-bold">AÑOS</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Años en que ha orientado la asignatura.
                </p>
            </div> --}}
        </div>

        <div class="mt-5 md:mt-0 md:col-span-10">
            <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-t-md">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6">

                        <div class="col-span-6 mb-4">
                            <legend class="titulo text-base font-medium text-gray-900">Seleccione el o los años en que ha orientado la asignatura de <b></b>:</legend>

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

                        <div class="years_error mt-2 ml-3 text-red-500 text-xs text-center hidden">*Por favor seleccione al menos un año para continuar.</div>
                        
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-end px-4 py-3 bg-gray-200 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                <button type="button" class="siguiente_btn inline-flex items-center px-4 py-2 bg-blue-700 border border-transparent rounded-md font-bold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-blue disabled:opacity-25 transition ease-in-out duration-150">
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
@endsection
@section('js')
    <script>
        var asignarura = localStorage.getItem('Asignatura');
        
        $.ajax({
            url: "{{ route( 'search.asignaturas' ) }}",
            dataType: 'text',
            data: {
                term: asignarura
            },success: function (data) {
                $('.titulo b').html(data);
            
            }
        });
    </script>
    <script src="{{ asset('js/years.js') }}" defer></script>
@endsection