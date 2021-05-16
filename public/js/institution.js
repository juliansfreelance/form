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
    $('select[name="genero"]').on('change', function() {
        $('.genero_error').addClass('hidden');
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

    $('input:text[name="nombreins"]').keyup(function() {
        nombreinstitucion = $(this).val();
        if (nombreinstitucion === '') {
            $('.nombreins_error').html('*Por favor indique el nombre de la institución.');
            $('.nombreins_error').removeClass('hidden');
            $('.enviar_btn').show();
        }
        else if (nombreinstitucion.length < 3) {
            $('.nombreins_error').html('*Nombre de la institución demasiado corto.');
            $('.nombreins_error').removeClass('hidden');
            $('.enviar_btn').show();
        }
        else {
            $('.nombreins_error').addClass('hidden');
        }
    });

    $('.siguiente_btn').on('click', function() {
        
        $('.siguiente_btn').addClass('hidden');

        localStorage.removeItem('Género');
        localStorage.removeItem('Asignatura');
        localStorage.removeItem('Tipo_institucion');
        localStorage.removeItem('Localidad');
        localStorage.removeItem('Nombre_institucion');

        genero = $('select[name="genero"]').val();
        asignatura_ratio = $('input:radio[name="asignatura"]');
        tipoinstitucion = $('select[name="tipoins"]').val();
        localidad = $('select[name="localidad"]').val();
        nombreinstitucion = $('input:text[name="nombreins"]').val();
        nombreinstitucion = nombreinstitucion.toUpperCase();

        if(genero == 0) {
            $('.genero_error').removeClass('hidden');
            $('.siguiente_btn').removeClass('hidden');
        }
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

        if(genero == 0) {
            $('.genero_error').removeClass('hidden');
            $('.siguiente_btn').removeClass('hidden');
        }
        else if( !(asignatura_ratio[0].checked || asignatura_ratio[1].checked) ) {
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
        else if(nombreinstitucion.length <= 3) {
            $('.nombreins_error').html('*Nombre de la institución demasiado corto.');
            $('.nombreins_error').removeClass('hidden');
            $('.siguiente_btn').removeClass('hidden');
        }
        else {
            localStorage.setItem('Género', genero);
            localStorage.setItem('Asignatura', asignatura);
            localStorage.setItem('Tipo_institucion', tipoinstitucion);
            localStorage.setItem('Localidad', localidad);
            localStorage.setItem('Nombre_institucion', nombreinstitucion);
			window.location = '/years';
        }
    });
});