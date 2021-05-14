var notext = false;

var nombretexto;
var editorial;
var neweditorial;
var edicion;

var recurso;
var newrecurso;

var datayear = [];
var redirecTo;

String.prototype.capitalize = function() {
  return this.charAt(0).toUpperCase() + this.slice(1)
}

$(document).ready(function() {
    
    $('body').scrollTop(0);
    $('.otraeditorial, .recurso').hide();

    $('input:text[name="nombretexto"]').alphanum();
    $('input:text[name="edicion"]').numeric('positiveInteger');

    $('#neweditorial').on('keyup', function () {
            $(this).capitalize();
        }).capitalize();

    $('input[type="checkbox"]').on('click', function(){
        notext = $("#notext").prop('checked');
        if (notext) { 
            $('.datatext').hide();
            $('.recurso').show();
        }
        else {
            $('.recurso').hide();
            $('.datatext').show();
        }
    });

    $('input:text[name="nombretexto"]').keyup(function(){
        nombretexto = $(this).val();
        if(nombretexto == '' || nombretexto == null) {
            $('.nombretexto_error').html('*Por favor indique el nombre del texto.');
            $('.nombretexto_error').removeClass('hidden');
        }
        else if(nombretexto.length < 5) {
            $('.nombretexto_error').html('*Nombre del texto demasiado corto.');
            $('.nombretexto_error').removeClass('hidden');
        }
        else {
            $('.nombretexto_error').addClass('hidden');
        }
    });

    $('select[name="editorial"]').on('change', function() {
        $('.editorial_error').addClass('hidden');
        editorial = $(this).val();
        if(editorial == 'otra') {
            $('.otraeditorial').show();
        }
        else if(editorial != 'otra') {
            $('.otraeditorial').hide();
            $('.neweditorial_error').addClass('hidden');
        }
    });

    $('input:text[name="neweditorial"]').keyup(function(){
        neweditorial = $(this).val();
       if(neweditorial == '' || neweditorial == null) {
            $('.neweditorial_error').html('*Por favor indique el nombre del la editorial del texto.');
            $('.neweditorial_error').removeClass('hidden');
            $('.siguiente_btn').removeClass('hidden');
        }
        else if(neweditorial.length <= 3) {
            $('.neweditorial_error').html('*Nombre de la editorial demasiado corto.');
            $('.neweditorial_error').removeClass('hidden');
            $('.siguiente_btn').removeClass('hidden');
        }
        else {
            $('.neweditorial_error').addClass('hidden');
        }
    });

    $('input:text[name="edicion"]').keyup(function(){
        edicion = parseInt($('input:text[name="edicion"]').val());
       if(isNaN(edicion)) {
            $('.edicion_error').html('Por favor indique un año de edición.');
            $('.edicion_error').removeClass('hidden');
            $('.siguiente_btn').removeClass('hidden');
        }
        else if(edicion.toString().length < 4) {
            $('.edicion_error').html('Por favor indique los cuatro dígitos del año.');
            $('.edicion_error').removeClass('hidden');
            $('.siguiente_btn').removeClass('hidden');
        }
        else if(!isNaN(edicion) && (edicion < 1584 || edicion > 2021)) {
            $('.edicion_error').html('Creo que deberías reconsiderar el año de edición.');
            $('.edicion_error').removeClass('hidden');
            $('.siguiente_btn').removeClass('hidden');
        }
        
        else {
            $('.edicion_error').addClass('hidden');
        }
    });


    $('.siguiente_btn').on('click', function() {

        $('.siguiente_btn').addClass('hidden');

        var pathname = window.location.pathname;
        pathname = pathname.split("/");
        var year = pathname[2];

        localStorage.removeItem('Year_'+year);

        if (notext) { 
            recurso = $('input:text[name="recurso"]').val().capitalize();
            if(recurso == '' || recurso == null) {
                $('.recurso_error').html('*Por favor indique el recurso empleado con mayor frecuencia.');
                $('.recurso_error').removeClass('hidden');
                $('.siguiente_btn').removeClass('hidden');
            }
            else if(recurso.length < 5) {
                $('.recurso_error').html('*Nombre del recurso demasiado corto.');
                $('.recurso_error').removeClass('hidden');
                $('.siguiente_btn').removeClass('hidden');
            }
            else {
                datayear = ["recurso", recurso];
                localStorage.setItem('Year_'+year, datayear);
                window.location = getRoute();
            }
        }
        else {
            nombretexto = $('input:text[name="nombretexto"]').val().capitalize();
            editorial = $('select[name="editorial"]').val();
            neweditorial = $('input:text[name="neweditorial"]').val().capitalize();
            edicion = parseInt($('input:text[name="edicion"]').val());
            
            if(nombretexto == '' || nombretexto == null) {
                $('.nombretexto_error').html('*Por favor indique el nombre del texto.');
                $('.nombretexto_error').removeClass('hidden');
                $('.siguiente_btn').removeClass('hidden');
            }
            if(nombretexto.length < 5) {
                $('.nombretexto_error').html('*Nombre del texto demasiado corto.');
                $('.nombretexto_error').removeClass('hidden');
                $('.siguiente_btn').removeClass('hidden');
            }
            if(editorial == 0) {
                $('.editorial_error').removeClass('hidden');
                $('.siguiente_btn').removeClass('hidden');
            }
            if(editorial == 'otra') {
                if(neweditorial == '' || neweditorial == null) {
                    $('.neweditorial_error').html('*Por favor indique el nombre del la editorial del texto.');
                    $('.neweditorial_error').removeClass('hidden');
                    $('.siguiente_btn').removeClass('hidden');
                }
                if(neweditorial.length <= 3) {
                    $('.neweditorial_error').html('*Nombre de la editorial demasiado corto.');
                    $('.neweditorial_error').removeClass('hidden');
                    $('.siguiente_btn').removeClass('hidden');
                }
            }
            if(isNaN(edicion)) {
                $('.edicion_error').html('Por favor indique un año de edición.');
                $('.edicion_error').removeClass('hidden');
                $('.siguiente_btn').removeClass('hidden');
            }
            if(!isNaN(edicion) && (edicion < 1584 || edicion > 2021)) {
                $('.edicion_error').html('Creo que deberías reconsiderar el año de edición.');
                $('.edicion_error').removeClass('hidden');
                $('.siguiente_btn').removeClass('hidden');
            }
            if(edicion.toString().length < 4) {
                $('.edicion_error').html('Por favor indique los cuatro dígitos del año.');
                $('.edicion_error').removeClass('hidden');
                $('.siguiente_btn').removeClass('hidden');
            }
            
            
            if(nombretexto == '' || nombretexto == null) {
                $('.nombretexto_error').html('*Por favor indique el nombre del texto.');
                $('.nombretexto_error').removeClass('hidden');
                $('.siguiente_btn').removeClass('hidden');
            }
            else if(nombretexto.length < 5) {
                $('.nombretexto_error').html('*Nombre del texto demasiado corto.');
                $('.nombretexto_error').removeClass('hidden');
                $('.siguiente_btn').removeClass('hidden');
            }
            else if(editorial == 0) {
                $('.editorial_error').removeClass('hidden');
                $('.siguiente_btn').removeClass('hidden');
            }
            else if(editorial == 'otra') {
                if(neweditorial == '' || neweditorial == null) {
                    $('.neweditorial_error').html('*Por favor indique el nombre del la editorial del texto.');
                    $('.neweditorial_error').removeClass('hidden');
                    $('.siguiente_btn').removeClass('hidden');
                }
                else if(neweditorial.length <= 3) {
                    $('.neweditorial_error').html('*Nombre de la editorial demasiado corto.');
                    $('.neweditorial_error').removeClass('hidden');
                    $('.siguiente_btn').removeClass('hidden');
                }
                else if(isNaN(edicion)) {
                    $('.edicion_error').html('Por favor indique un año de edición.');
                    $('.edicion_error').removeClass('hidden');
                    $('.siguiente_btn').removeClass('hidden');
                }
                else if(edicion.toString().length < 4) {
                    $('.edicion_error').html('Por favor indique los cuatro dígitos del año.');
                    $('.edicion_error').removeClass('hidden');
                    $('.siguiente_btn').removeClass('hidden');
                }
                else if(!isNaN(edicion) && (edicion < 1584 || edicion > 2021)) {
                    $('.edicion_error').html('Creo que deberías reconsiderar el año de edición.');
                    $('.edicion_error').removeClass('hidden');
                    $('.siguiente_btn').removeClass('hidden');
                }
                else{
                    datayear = ["texto", nombretexto, "new", neweditorial, edicion ];
                    localStorage.setItem('Year_'+year, datayear);
                    window.location = getRoute();
                }
            }
            else if(isNaN(edicion)) {
                $('.edicion_error').html('Por favor indique un año de edición.');
                $('.edicion_error').removeClass('hidden');
                $('.siguiente_btn').removeClass('hidden');
            }
            else if(edicion.toString().length < 4) {
                $('.edicion_error').html('Por favor indique los cuatro dígitos del año.');
                $('.edicion_error').removeClass('hidden');
                $('.siguiente_btn').removeClass('hidden');
            }
            else if(!isNaN(edicion) && (edicion < 1584 || edicion > 2021)) {
                $('.edicion_error').html('Creo que deberías reconsiderar el año de edición.');
                $('.edicion_error').removeClass('hidden');
                $('.siguiente_btn').removeClass('hidden');
            }
            else {
                datayear = ["texto", nombretexto, "old", editorial, edicion ];
                localStorage.setItem('Year_'+year, datayear);
                window.location = getRoute();
            }
        }
    });
});

function getRoute() {
    var years = localStorage.getItem('Years');
    years = years.split(",");

    var year1 = years.find(year => year == '2021');
    var year2 = years.find(year => year == '2020');
    var year3 = years.find(year => year == '2019');
    var year4 = years.find(year => year == '2018');
    var year5 = years.find(year => year == '2017');

    if(year1 !== undefined && localStorage.getItem('Year_2021') == undefined){
        redirecTo = '/year/2021';
    }
    else if(year2 !== undefined && localStorage.getItem('Year_2020') == undefined){
        redirecTo = '/year/2020';
    }
    else if(year3 !== undefined && localStorage.getItem('Year_2019') == undefined){
        redirecTo = '/year/2019';
    }
    else if(year4 !== undefined && localStorage.getItem('Year_2018') == undefined){
        redirecTo = '/year/2018';
    }
    else if(year5 !== undefined && localStorage.getItem('Year_2017') == undefined){
        redirecTo = '/year/2017';
    }
    else {
        redirecTo = '/information';
    }

    return redirecTo;
}