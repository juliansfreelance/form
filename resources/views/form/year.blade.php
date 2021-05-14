@extends('layouts.form')

@section('title', 'Año '. $year)

@section('css')
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
@endsection
 
@section('content')
    <div class="md:grid md:grid-cols-12 md:gap-6">
                
        <div class="md:col-span-1">
            {{-- <div class="px-4 sm:px-0">
                <h3 class="text-2xl text-gray-700 border-b border-gray-200 pb-2 font-bold">RECURSO {{$year}}</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Texto o el recurso empleado para el año {{$year}}.
                </p>
            </div> --}}
        </div>

        <div class="mt-5 md:mt-0 md:col-span-10">
            <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-t-md">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6">

                        <section class="datatext">

                            <div class="col-span-6">
                                <legend class="text-base font-medium text-gray-900 mb-4">Indique el nombre del texto con el que ha orientado la asignatura para el año <b>{{$year}}.</b></legend>
                                <label from="nombretexto" class="block text-base font-medium text-gray-900">Nombre del texto escolar:</label>
                                <input id="nombretexto" name="nombretexto" type="text" class="uppercase block w-full mt-1 border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm" value="">
                                <div class="nombretexto_error mt-2 ml-3 text-red-500 text-xs hidden">*Por favor indique el nombre del texto.</div>
                            </div>
    
                            <div>
                                <div class="pt-5 pb-4">
                                    <div class="border-b border-gray-200"></div>
                                </div>
                            </div>
    
                            <div class="col-span-6 mb-4">
                                <label from="editorial" class="block text-base font-medium text-gray-900">Editorial:</label>
                                <select id="editorial" name="editorial" class="mt-1 block w-full form-select border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                    <option value="0" disable class="text-gray-400 bg-gray-100">Seleccione una editorial</option>
                                     @foreach ($editoriales as $item)
                                        <option value="{{$item->id_editorial}}">{{$item->nombre_editorial}}</option>
                                    @endforeach
                                    <option value="otra">Otra</option>
                                </select>
                                <div class="editorial_error mt-2 ml-3 text-red-500 text-xs hidden">*Por favor seleccione la editorial del texto.</div>
                            </div>
    
                            <div class="col-span-6 otraeditorial">
                                <label from="neweditorial" class="block text-base font-medium text-gray-900">¿Cuál Editorial?</label>
                                <input id="neweditorial" name="neweditorial" type="text" class="capitalize block w-full mt-1 border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm" value="">
                                <div class="neweditorial_error mt-2 ml-3 text-red-500 text-xs hidden">*Por favor indique el nombre del la editorial del texto.</div>
                            </div>
    
                            <div>
                                <div class="pt-5 pb-4">
                                    <div class="border-b border-gray-200"></div>
                                </div>
                            </div>
    
                            <div class="col-span-6">
                                <label from="edicion" class="block text-base font-medium text-gray-900">Año de edición <span class="text-gray-400 text-xs">(YYYY)</span></label>
                                <input id="edicion" name="edicion" type="text" maxlength="4" class="block w-full mt-1 border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm" value="">
                                <div class="edicion_error mt-2 ml-3 text-red-500 text-xs hidden">*Por favor indique un año de edición.</div>
                            </div>
    
                            <div>
                                <div class="pt-5 pb-4">
                                    <div class="border-b border-gray-200"></div>
                                </div>
                            </div>
                        </section>

                        <div class="col-span-6">
                            <div class="flex items-start mt-2">
                                <div class="flex items-center h-5">
                                    <input id="notext" name="notext" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="notext" class="font-medium text-gray-700">No empleé ningún texto escolar durante {{$year}}.</label>
                                    <p class="text-gray-500 text-xs">Seleccione solo si no empleó ningún texto escolar en el año {{$year}}.</p>
                                </div>
                            </div>
                        </div>

                        <section class="recurso">
                            <div>
                                <div class="pt-5 pb-4">
                                    <div class="border-b border-gray-200"></div>
                                </div>
                            </div>
            
    
                            <div class="col-span-6">
                                <legend class="text-base font-medium text-gray-900 mb-4">Indique el nombre del recurso más frecuente con el que ha orientado la asignatura.</legend>
                                <label from="recurso" class="block text-base font-medium text-gray-900">Recurso frecuente más empleado:</label>
                                <input id="recurso" name="recurso" type="text" class="capitalize block w-full mt-1 border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm" value="">
                                <div class="recurso_error mt-2 ml-3 text-red-500 text-xs hidden">*Por favor indique el recurso empleado.</div>
                            </div>
                        </section>
                        
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-end px-4 py-3 bg-gray-200 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                <button type="submit" class="siguiente_btn inline-flex items-center px-4 py-2 bg-blue-700 border border-transparent rounded-md font-bold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-blue disabled:opacity-25 transition ease-in-out duration-150">
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
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/year.js') }}" defer></script>
    <script>
        $('#nombretexto').autocomplete({
            source: function( request, response ) {
                $.ajax({
                    url: "{{route('search.textos')}}",
                    dataType: 'json',
                    data: {
                        term: request.term
                    },
                    success: function(data) {
                        response(data)
                    }
                });
            }
        });
        $('#recurso').autocomplete({
            source: function( request, response ) {
                $.ajax({
                    url: "{{route('search.recursos')}}",
                    dataType: 'json',
                    data: {
                        term: request.term
                    },
                    success: function(data) {
                        response(data)
                    }
                });
            }
        });
    </script>
@endsection