var genero;

var dispocision_ratio;
var dispocision;

var contacto_ratio;
var contacto;

var nombre;
var apellido;
var correo;
var telefono;

String.prototype.capitalize = function() {
    return this.replace(/(^|\s)\S/g, l => l.toUpperCase());
}

$(document).ready(function() {

    $('body').scrollTop(0);
    $('input:text[name="nombre"], input:text[name="apellido"]').alpha();
    $('input:text[name="correo"]').alphanum({allow: ('_@.#+-'), allowSpace: false})
	$('input:text[name="telefono"]').numeric("positiveInteger");

    $('.habeas, .contactoform').hide();

    dispocision = $('input:radio[name="dispocision"]');
    contacto = $('input:radio[name="contacto"]');
    
    if(dispocision[0].checked){
        $('.habeas').show();
    }
    if(dispocision[1].checked) {
        $('.habeas').hide();
    }
    if(contacto[0].checked){
        $('.contactoform').show();
    }
    if(contacto[1].checked) {
        $('.contactoform').hide();
    }



    $('input:radio[name="asignatura"]').on('change', function() {
        asignatura = $(this).val();
        $('.asignatura_error').addClass('hidden');
    });

    $('input:radio[name="dispocision"]').on('change', function() {
        dispocision = $(this).val();        

        if(dispocision == 1){
            $('.habeas').show();
        }
        if(dispocision == 0) {
            $('.habeas').hide();
        }
        $('.dispocision_error').addClass('hidden');
    });

    $('input:radio[name="contacto"]').on('change', function() {
        contacto = $(this).val();        

        if(contacto == 1){
            $('.contactoform').show();
        }
        if(contacto == 0) {
            $('.contactoform').hide();
        }
        $('.contacto_error').addClass('hidden');
    });

    $('input:text[name="nombre"]').keyup(function() {
        var Nombres = this.value;
        if (Nombres === '') {
            $('.nombre_error').html('*Por favor indique su nombre.');
            $('.nombre_error').removeClass('hidden');
            $('.enviar_btn').show();
        }
        else if (Nombres.length < 3) {
            $('.nombre_error').html('*Nombre demasiado corto.');
            $('.nombre_error').removeClass('hidden');
            $('.enviar_btn').show();
        }
        else {
            $('.nombre_error').addClass('hidden');
        }
    });

	$('input:text[name="apellido"]').keyup(function() {
        var Apellidos = this.value;
        if (Apellidos === '')  {
            $('.apellido_error').html('*Por favor indique su apellido.');
            $('.apellido_error').removeClass('hidden');
            $('.enviar_btn').show();
        }
        else if (Apellidos.length < 3) {
            $('.apellido_error').html('*Apellido demasiado corto.');
            $('.apellido_error').removeClass('hidden');
            $('.enviar_btn').show();
        }
        else {
            $('.apellido_error').addClass('hidden');
        }
    });

    $('input:text[name="correo"]').keyup(function() {
        var Correo = this.value;
        var CorreoExpReg = new RegExp(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,3})$/i);
        if (Correo === '')  {
            $('.correo_error').html('*Por favor indique su correo de contacto.');
            $('.correo_error').removeClass('hidden');
            $('.enviar_btn').show();
        }
        else if(!(CorreoExpReg.test(Correo))) {
            $('.correo_error').html('*Por favor indique un correo válido. (nombre@example.com)');
            $('.correo_error').removeClass('hidden');
            $('.enviar_btn').show();
        }
        else {
            $('.correo_error').addClass('hidden');
        }
    });

    $('input:text[name="telefono"]').keyup(function() {
        var Telefono = this.value;
        var TelefonoExpReg = new RegExp(/^\(?([3]{1})\)?[-. ]?([0-9]{2})[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/g);
        if (Telefono === '')  {
            $('.telefono_error').removeClass('hidden');
        }
        else if (!(TelefonoExpReg.test(Telefono))) {
             $('.telefono_error').removeClass('hidden');
             $('.enviar_btn').show();
        } else {
            $('.telefono_error').addClass('hidden');
        }
    });


    $('.enviar_btn').on('click', function() {

        $('.enviar_btn').hide();

        localStorage.removeItem('Nombre');
        localStorage.removeItem('Apellido');
        localStorage.removeItem('Correo');
        localStorage.removeItem('Telefono');

        dispocision_ratio = $('input:radio[name="dispocision"]');
        contacto_ratio = $('input:radio[name="contacto"]');
        nombre = $('input:text[name="nombre"]').val().capitalize();
        apellido = $('input:text[name="apellido"]').val().capitalize();
        correo = $('input:text[name="correo"]').val();
        telefono = $('input:text[name="telefono"]').val();

        var CorreoExpReg = new RegExp(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,3})$/i);
        var TelefonoExpReg = new RegExp(/^\(?([3]{1})\)?[-. ]?([0-9]{2})[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/g);



        if( !(dispocision_ratio[0].checked || dispocision_ratio[1].checked) ) {
            $('.dispocision_error').removeClass('hidden');
            $('.enviar_btn').show();
        }
        else if(dispocision == 0) {
            window.location = '/action/saved';
        }
        else if(!(contacto_ratio[0].checked || contacto_ratio[1].checked)){
            $('.contacto_error').removeClass('hidden');
            $('.enviar_btn').show();
        }
        else if(contacto == 0) {
            window.location = '/action/saved';
        }
        else if (nombre === '') {
            $('.nombre_error').html('*Por favor indique su nombre.');
            $('.nombre_error').removeClass('hidden');
            $('.enviar_btn').show();
            if (nombre.length < 3) {
                $('.nombre_error').html('*Nombre demasiado corto.');
                $('.nombre_error').removeClass('hidden');
                $('.enviar_btn').show();
            }
            if (apellido === '')  {
                $('.apellido_error').html('*Por favor indique su apellido.');
                $('.apellido_error').removeClass('hidden');
                $('.enviar_btn').show();
            }
            if (apellido.length < 3) {
                $('.apellido_error').html('*Apellido demasiado corto.');
                $('.apellido_error').removeClass('hidden');
                $('.enviar_btn').show();
            }
            if (correo === '')  {
                $('.correo_error').html('*Por favor indique su correo de contacto.');
                $('.correo_error').removeClass('hidden');
                $('.enviar_btn').show();
            }
            if(!(CorreoExpReg.test(correo))) {
                $('.correo_error').html('*Por favor indique un correo válido. (nombre@example.com)');
                $('.correo_error').removeClass('hidden');
                $('.enviar_btn').show();
            }
            if (telefono === '')  {
                $('.telefono_error').removeClass('hidden');
                $('.enviar_btn').show();
            }
            if (!(TelefonoExpReg.test(telefono))) {
                $('.telefono_error').removeClass('hidden');
                $('.enviar_btn').show();
            }
        }
        else if (nombre.length < 3) {
            $('.nombre_error').html('*Nombre demasiado corto.');
            $('.nombre_error').removeClass('hidden');
            $('.enviar_btn').show();
        }
        else if (apellido === '')  {
            $('.apellido_error').html('*Por favor indique su apellido.');
            $('.apellido_error').removeClass('hidden');
            $('.enviar_btn').show();
        }
        else if (apellido.length < 3) {
            $('.apellido_error').html('*Apellido demasiado corto.');
            $('.apellido_error').removeClass('hidden');
            $('.enviar_btn').show();
        }
        else if (correo === '')  {
            $('.correo_error').html('*Por favor indique su correo de contacto.');
            $('.correo_error').removeClass('hidden');
            $('.enviar_btn').show();
        }
        else if(!(CorreoExpReg.test(correo))) {
            $('.correo_error').html('*Por favor indique un correo válido. (nombre@example.com)');
            $('.correo_error').removeClass('hidden');
            $('.enviar_btn').show();
        }
        else if (telefono === '')  {
            $('.telefono_error').removeClass('hidden');
            $('.enviar_btn').show();
        }
        else if (!(TelefonoExpReg.test(telefono))) {
             $('.telefono_error').removeClass('hidden');
             $('.enviar_btn').show();
        }
        else {
            localStorage.setItem('Nombre', nombre);
            localStorage.setItem('Apellido', apellido);
            localStorage.setItem('Correo', correo);
            localStorage.setItem('Telefono', telefono);
			window.location = '/action/saved';
        }


    });
    
});