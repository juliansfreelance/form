let asignatura;
let tipoinstitucion;
let localidad;
let nombreinstitucion;

$(document).ready(function()
{
    $('body').scrollTop(0);
    $('input:text[name="nombreins"]').alphanum({
        allowNumeric: false,
        allow: '()'
    });

    $('input:radio[name="asignatura"]').on('change', function() {
        asignatura = $(this).val();
        $('.asignatura_error').addClass('hidden');
    });

    $('select[name="tipoins"]').on('change', function() {
        tipoinstitucion = $(this).val();
        $('.tipoins_error').addClass('hidden');
    });

    $('select[name="localidad"]').on('change', function() {
        localidad = $(this).val();
        $('.localidad_error').addClass('hidden');
    });

    $('input:text[name="nombreins"]').on('change', function() {
        nombreinstitucion = $(this).val();
        $('.nombreins_error').addClass('hidden');
    });

    $('.siguiente_btn').on('click', function() {
        
        $('.siguiente_btn').addClass('hidden');

        localStorage.removeItem('Asignatura');
        localStorage.removeItem('Tipo_institucion');
        localStorage.removeItem('Localidad');
        localStorage.removeItem('Nombre_institucion');

        asignatura_ratio = $('input:radio[name="asignatura"]');
        tipoinstitucion = $('select[name="tipoins"]').val();
        localidad = $('select[name="localidad"]').val();
        nombreinstitucion = $('input:text[name="nombreins"]').val();
        nombreinstitucion = nombreinstitucion.toUpperCase();

        if( !(asignatura_ratio[0].checked || asignatura_ratio[1].checked) ) {
            $('.asignatura_error').removeClass('hidden');
            $('.siguiente_btn').removeClass('hidden');
        }
        
        if(tipoinstitucion == 0) {
            $('.tipoins_error').removeClass('hidden');
            $('.siguiente_btn').removeClass('hidden');
        }

        if(localidad == 0) {
            $('.localidad_error').removeClass('hidden');
            $('.siguiente_btn').removeClass('hidden');
        }

        if(nombreinstitucion == '' || nombreinstitucion == null) {
            $('.nombreins_error').html('*Por favor indique el nombre de la institución.');
            $('.nombreins_error').removeClass('hidden');
            $('.siguiente_btn').removeClass('hidden');
        }
        if(nombreinstitucion.length <= 8) {
            $('.nombreins_error').html('*Nombre de la institución demasiado corto.');
            $('.nombreins_error').removeClass('hidden');
            $('.siguiente_btn').removeClass('hidden');
        }

        if( !(asignatura_ratio[0].checked || asignatura_ratio[1].checked) ) {
            $('.asignatura_error').removeClass('hidden');
            $('.siguiente_btn').removeClass('hidden');
        }
        else if(tipoinstitucion == 0) {
            $('.tipoins_error').removeClass('hidden');
            $('.siguiente_btn').removeClass('hidden');
        }
        else if(localidad == 0) {
            $('.localidad_error').removeClass('hidden');
            $('.siguiente_btn').removeClass('hidden');
        }
        else if(nombreinstitucion == '' || nombreinstitucion == null) {
            $('.nombreins_error').html('*Por favor indique el nombre de la institución.');
            $('.nombreins_error').removeClass('hidden');
            $('.siguiente_btn').removeClass('hidden');
        }
        else if(nombreinstitucion.length <= 8) {
            $('.nombreins_error').html('*Nombre de la institución demasiado corto.');
            $('.nombreins_error').removeClass('hidden');
            $('.siguiente_btn').removeClass('hidden');
        }
        else {
            localStorage.setItem('Asignatura', asignatura);
            localStorage.setItem('Tipo_institucion', tipoinstitucion);
            localStorage.setItem('Localidad', localidad);
            localStorage.setItem('Nombre_institucion', nombreinstitucion);
			window.location = '/years';
        }
    });
});