@extends('layouts.form')

@section('title', $action)
 
@section('content')
    @csrf
    <div class="md:grid md:grid-cols-12 md:gap-6"> 
        <div class="md:col-span-1">
            {{-- <div class="px-4 sm:px-0">
                <h3 class="text-2xl text-gray-700 border-b border-gray-200 pb-2 font-bold">FINALIZAR</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Gracias por su interés y participación este formulario.
                </p>
            </div> --}}
        </div>
        <div class="mt-5 md:mt-0 md:col-span-10">
            <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-t-md ">
                <div class="grid grid-cols-6 gap-6">
                    @if ($action == 'cancel')
                        <div class="col-span-6 alert-interaccion">
                            <div class="bg-red-100 text-red-500 border-red-300 border-t-4 p-4 rounded-md shadow">
                                <p class="title font-bold">Gracias por su colaboración</p>
                                <p class="descripcion italic font-medium"><span class="not-italic font-normal">Ha decidido cancelar la encuesta...<br>En caso contrario, seleccione el botón volver.</span></p>
                            </div>
                        </div>
                    @else
                        @if ($action == 'saved')
                            <div class="col-span-6 alert_saved hidden">
                                <div class="bg-orange-100 text-orange-500 border-orange-300 border-t-4 p-4 rounded-md shadow">
                                    <div class="relative flex flex-row">
                                        <p class="title font-bold">Guardando Encuesta</p>
                                        <span class="loader-sent inline-flex justify-center items-center ml-4">
                                            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-orange-500 opacity-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                                        </span>
                                    </div>
                                    <p class="descripcion">Por favor espere, <span>estamos procesando sus respuestas.</span></p>
                                    <p class="text-xs">Recomendamos no cerrar ni recargar la página mientras se envían los registros.</p>
                                </div>
                            </div>
                             <div class="col-span-6 alert_exito hidden">
                                <div class="bg-green-100 text-green-500 border-green-300 border-t-4 p-4 rounded-md shadow">
                                    <p class="title font-bold">Encuesta Enviada</p>
                                    <p class="descripcion italic font-medium"><span class="not-italic font-normal">Se han guardado sus respuestas correctamente.</span><br>¡Gracias por su participación!</p>
                                </div>
                            </div>
                            <div class="col-span-6 alert_error hidden">
                                <div class="bg-red-100 text-red-500 border-red-300 border-t-4 p-4 rounded-md shadow">
                                    <p class="title font-bold"></p>
                                    <p class="descripcion italic font-medium"><span class="not-italic font-normal"></span></p>
                                </div>
                            </div>
                        @else
                            @php
                                return abort(404);
                            @endphp
                        @endif
                    @endif
                    
                    <div class="col-span-6">
                        <div class="text-gray-500 text-justify">
                            <p class="descripcion">En caso de inquietudes e inconvenientes por favor comuníquese a:</p>
                            <a href="mailto:freddy.castro@correo.ugr.es?subject=Soporte%20formulario%20identificación%20muestra%20de%20textos%20escolares" target="_blank">
                                <div class="mt-0 flex items-center text-sm font-semibold ">
                                    <div class="text-blue-700">freddycastro@correo.ugr.es</div>
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
                <a href="{{ route( 'home' ) }}" class="home_btn">
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
@section('js')
    <script src="{{ asset('js/guardar.js') }}" defer></script>
    <script>
        


        

       

        

        //2020
        function yeardos() {
            if(localStorage.getItem('Year_2020') != undefined) {
                var year_2020 = localStorage.getItem('Year_2020');
                year_2020 = year_2020.split(',');
                if(year_2020[0] == 'texto') {
                    if(year_2020[2] == 'old') {
                        data2020 = {
                            tipo: 'year2',
                            _token: $('input[name="_token"]').val(),
                            texto_nombre: year_2020[1],
                            id_editorial: year_2020[3],
                            year_edicion: year_2020[4],
                        }
                    }
                    else {
                        data2020 = {
                            tipo: 'year2',
                            _token: $('input[name="_token"]').val(),
                            texto_nombre: year_2020[1],
                            nombre_editorial: year_2020[3],
                            year_edicion: year_2020[4],
                        }
                    }
                }
                else {
                    data2020 = {
                        tipo: 'year2',
                        _token: $('input[name="_token"]').val(),
                        recurso_nombre: year_2020[1],
                    }
                }
            }
            return data2020;
        }

         //2019
        function yeartres() {
            if(localStorage.getItem('Year_2019') != undefined) {
                var year_2019 = localStorage.getItem('Year_2019');
                year_2019 = year_2019.split(',');
                if(year_2019[0] == 'texto') {
                    if(year_2019[2] == 'old') {
                        data2019 = {
                            tipo: 'year3',
                            _token: $('input[name="_token"]').val(),
                            texto_nombre: year_2019[1],
                            id_editorial: year_2019[3],
                            year_edicion: year_2019[4],
                        }
                    }
                    else {
                        data2019 = {
                            tipo: 'year3',
                            _token: $('input[name="_token"]').val(),
                            texto_nombre: year_2019[1],
                            nombre_editorial: year_2019[3],
                            year_edicion: year_2019[4],
                        }
                    }
                }
                else {
                    data2019 = {
                        tipo: 'year3',
                        _token: $('input[name="_token"]').val(),
                        recurso_nombre: year_2019[1],
                    }
                }
            }
            return data2019;
        }

         //2018
        function yearcuatro() {
            if(localStorage.getItem('Year_2018') != undefined) {
                var year_2018 = localStorage.getItem('Year_2018');
                year_2018 = year_2018.split(',');
                if(year_2018[0] == 'texto') {
                    if(year_2018[2] == 'old') {
                        data2018 = {
                            tipo: 'year4',
                            _token: $('input[name="_token"]').val(),
                            texto_nombre: year_2018[1],
                            id_editorial: year_2018[3],
                            year_edicion: year_2018[4],
                        }
                    }
                    else {
                        data2018 = {
                            tipo: 'year4',
                            _token: $('input[name="_token"]').val(),
                            texto_nombre: year_2018[1],
                            nombre_editorial: year_2018[3],
                            year_edicion: year_2018[4],
                        }
                    }
                }
                else {
                    data2018 = {
                        tipo: 'year4',
                        _token: $('input[name="_token"]').val(),
                        recurso_nombre: year_2018[1],
                        
                    }
                }
            }
            return data2018;
        }

        function yearcinco() {
            if(localStorage.getItem('Year_2017') != undefined) {
                var year_2017 = localStorage.getItem('Year_2017');
                year_2017 = year_2017.split(',');
                if(year_2017[0] == 'texto') {
                    if(year_2017[2] == 'old') {
                        data2017 = {
                            tipo: 'year5',
                            _token: $('input[name="_token"]').val(),
                            texto_nombre: year_2017[1],
                            id_editorial: year_2017[3],
                            year_edicion: year_2017[4],
                        }
                    }
                    else {
                        data2017 = {
                            tipo: 'year5',
                            _token: $('input[name="_token"]').val(),
                            texto_nombre: year_2017[1],
                            nombre_editorial: year_2017[3],
                            year_edicion: year_2017[4],
                        }
                    }
                }
                else {
                    data2017 = {
                        tipo: 'year5',
                        _token: $('input[name="_token"]').val(),
                        recurso_nombre: year_2017[1],
                    }
                }
            }
            return data2017;
        }

        function insert(tipo, datos) {
            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')}
            });
            $.ajax ({
                type: 'POST',
                url: "{{route('encuesta.store')}}",
                data: datos,
                dataType: "json",
                beforeSend: function() {
                    $(".alert_saved").show();
                    if(tipo == 'docente') {
                        $('.alert_saved .descripcion span').html('Guardando información complementaria...');
                   }
                   else if (tipo == 'institucion'){
                        $('.alert_saved .descripcion span').html('Guardando información de la institución...');
                   }
                   else if (tipo == 'encuesta') {
                        $('.alert_saved .descripcion span').html('Guardando información de relación encuesta...');
                   }
                   else if (tipo == 'year1') {
                        $('.alert_saved .descripcion span').html('Guardando información de recurso 2021...');
                   }
                   else if (tipo == 'year2') {
                        $('.alert_saved .descripcion span').html('Guardando información de recurso 2020...');
                   }
                   else if (tipo == 'year3') {
                        $('.alert_saved .descripcion span').html('Guardando información de recurso 2019...');
                   }
                   else if (tipo == 'year4') {
                        $('.alert_saved .descripcion span').html('Guardando información de recurso 2018...');
                   }
                   else if (tipo == 'year5') {
                        $('.alert_saved .descripcion span').html('Guardando información de recurso 2017...');
                   }
                   
                }, success: function(response) {
                    $(".alert_saved").hide();
                   if(tipo == 'docente') {
                        console.log(response);
                        localStorage.setItem('id_docente',JSON.stringify(response.id_docente));
                        institucion();
                   }
                   else if (tipo == 'institucion'){
                        console.log(response);
                        localStorage.setItem('id_institucion', JSON.stringify(response.id_institucion));
                        encuesta();
                   }
                   else if (tipo == 'encuesta') {
                        console.log(response);
                        localStorage.setItem('id_encuesta', JSON.stringify(response.id_encuesta));
                        yearuno();
                   }
                   else if (tipo == 'year1') {
                        console.log(response);
                        yeardos();yeartres
                   }
                   else if (tipo == 'year2') {
                        console.log(response);
                        yeartres();
                   }
                   else if (tipo == 'year3') {
                        console.log(response);
                        yearcuatro();
                   }
                   else if (tipo == 'year4') {
                        console.log(response);
                        yearcinco();
                   }
                   else if (tipo == 'year5') {
                        console.log(response);
                        $(".alert_saved").hide();
                        $(".alert_exito").removeClass('hidden');
                        localStorage.clear();
                   }
                }, error: function(response, error, objError) {
                    $(".alert_saved").hide();
                    if(navigator.onLine == true) {
                        $(".alert_error .title").html('Error');
                        $(".alert_error .descripcion span").html('Algo salio mal intente de nuevo, no se a podido guardar la encuesta.');
                        $(".alert_error").show();
                    }
                    else {
                        $(".alert_error .title").html('Error');
                        $(".alert_error .descripcion span").html('Verifica tu conexion a internet, no se a podido guardar la encuesta.');
                        $(".alert_error").show();
                    }
                }
            }).fail( function( jqXHR, textStatus, errorThrown ) {
                $(".alert_saved").hide();
                if (jqXHR.status === 0) {
                    $(".alert_error .title").html('Error Status');
                    $(".alert_error .descripcion span").html('Verifica tu conexion a internet, no se a podido guardar la encuesta.');
                    $(".alert_error").show();
                } 
                else if (jqXHR.status == 404) {
                    $(".alert_error .title").html('Error Status');
                    $(".alert_error .descripcion span").html('Página solicitada no encontrada [400], no se a podido guardar la encuesta.');
                    $(".alert_error").show();
                } 
                else if (jqXHR.status == 500) {
                    $(".alert_error .title").html('Error Status');
                    $(".alert_error .descripcion span").html('Error interno del servidor [500], no se a podido guardar la encuesta.');
                    $(".alert_error").show();
                } 
                else if (textStatus === 'parsererror') {
                    $(".alert_error .title").html('Error Status');
                    $(".alert_error .descripcion span").html('Error al analizar el archivo solicitado, no se a podido guardar la encuesta.');
                    $(".alert_error").show();
                } 
                else if (textStatus === 'timeout') {
                    $(".alert_error .title").html('Error Status');
                    $(".alert_error .descripcion span").html('Tiempo de espera exedido, no se a podido guardar la encuesta.');
                    $(".alert_error").show();
                } 
                else if (textStatus === 'abort') {
                    $(".alert_error .title").html('Abort');
                    $(".alert_error .descripcion span").html('Petición Abortada, no se a podido guardar la encuesta.');
                    $(".alert_error").show();
                } 
                else {
                    $(".alert_error .title").html('Fail');
                    $(".alert_error .descripcion span").html('Error desconocido [419], no se ha podido establecer conexión');
                    $(".alert_error").show();
                }
            });
        }
    </script>
@endsection