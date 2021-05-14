@extends('layouts.form')

@section('title', 'Institución y asignatura')

 @section('css')
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
@endsection

@section('content')
    <div class="md:grid md:grid-cols-12 md:gap-6">
                    
        <div class="md:col-span-1">
            {{-- <div class="px-4 sm:px-0">
                <h3 class="text-2xl text-gray-700 border-b border-gray-200 pb-2 font-bold">ASIGNATURA E INSTITUCIÓN</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Asignatura e institución donde es o fue docente.
                </p>
            </div> --}}
        </div>
    
        <div class="mt-5 md:mt-0 md:col-span-10">
            <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-t-md">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6"> 

                        <div class="col-span-6 mb-4">
                            <label from="genero" class="block text-base font-medium text-gray-900">Indique su género:</label>
                            <select id="genero" name="genero" class="mt-1 block w-full form-select border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option value="0" disable class="text-gray-400 bg-gray-100">Seleccione un género</option>
                                @foreach ($generos as $item)
                                    <option value="{{$item->id_genero}}">{{$item->nombre_genero}}</option>
                                @endforeach
                            </select>
                            <div class="genero_error mt-2 ml-3 text-red-500 text-xs hidden">*Por favor seleccione su género.</div>
                        </div>

                        <div>
                            <div class="pt-1 pb-4">
                                <div class="border-b border-gray-200"></div>
                            </div>
                        </div>

                        <div class="col-span-6 mb-4">
                            <legend class="text-base font-medium text-gray-900">Usted es docente de:</legend>
                            <p class="text-gray-500 text-xs">Seleccione la asignatura que más ha orientado:</p>

                            <div class="mt-4 space-y-4">
                                <div class="flex items-center">
                                    <input id="sociales" name="asignatura" value="2 {{ old('asignatura') == 2 ? 'selected' : '' }}" type="radio" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                    <label for="sociales" class="ml-3 block text-sm font-medium text-gray-700">Ciencias Sociales</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="naturales" name="asignatura" value="1 {{ old('asignatura') == 1 ? 'selected' : '' }}" type="radio" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                    <label for="naturales" class="ml-3 block text-sm font-medium text-gray-700">Ciencias Naturales</label>
                                </div>
                            </div>
                            <div class="asignatura_error mt-2 ml-3 text-red-500 text-xs hidden">*Por favor seleccione una asignatura.</div>
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
                                @foreach ($tipoInsti as $item)
                                    <option value="{{$item->id_tipo_institucion}} {{ old('tipoins') == $item->id_tipo_institucion ? 'selected' : '' }}">{{$item->nombre_tipo_institucion}}</option>
                                @endforeach
                            </select>
                            <div class="tipoins_error mt-2 ml-3 text-red-500 text-xs hidden">*Por favor seleccione un tipo de institución.</div>
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
                                @foreach ($localidades as $item)
                                    <option value="{{$item->id_localidad}} {{ old('localidad') == $item->id_localidad ? 'selected' : '' }}">{{$item->nombre_localidad}}</option>
                                @endforeach
                            </select>
                            <div class="localidad_error mt-2 ml-3 text-red-500 text-xs hidden">*Por favor seleccione una localidad.</div>
                        </div>

                        <div>
                            <div class="pt-1 pb-4">
                                <div class="border-b border-gray-200"></div>
                            </div>
                        </div>

                        <div class="col-span-6">
                            <label from="nombreins" class="block text-base font-medium text-gray-900">Nombre de la institución en la que labora(ó):</label>
                            <input id="nombreins" name="nombreins" type="text" class="uppercase block w-full mt-1 border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm" value="{{old('nombreins')}}">
                            <div class="nombreins_error mt-2 ml-3 text-red-500 text-xs hidden">*Por favor indique el nombre de la institución.</div>
                        </div>
                        
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
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/institution.js') }}" defer></script>
    <script>
        $('#nombreins').autocomplete({
            source: function( request, response ) {
                $.ajax({
                    url: "{{route('search.institutions')}}",
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
