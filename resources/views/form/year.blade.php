@extends('layouts.form')

@section('title', 'Año '. $year)
 
@section('content')
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
@endsection