var notext = false;

var nombretexto;
var editorial;
var neweditorial;
var edicion;

var recurso;
var newrecurso;

var datayear = [];
var redirecTo;

$('#neweditorial, #newrecurso').on('keyup', function () {
        $(this).capitalize();
        console.log('hola');
        // $('.newrecurso_error').addClass('hidden');
        // $('.neweditorial_error').addClass('hidden');
    }).capitalize();
$(document).ready(function() {
    
    $('body').scrollTop(0);
    $('input:text[name="nombretexto"]').alphanum();
    $('input:text[name="edicion"]').numeric();

    

    $('input[type="checkbox"]').on('click', function(){
        notext = $("#notext").prop('checked');
        if (notext) { 
            $('.datatext, .otraeditorial, .otrorecurso').hide();
            $('.recurso').show();
        }
        else {
            $('.recurso, .otraeditorial, .otrorecurso').hide();
            $('.datatext').show();
        }
    });

    $('select[name="editorial"]').on('change', function() {
        editorial = $(this).val();
        
        if(editorial == 'otra') {
            $('.otraeditorial').show();
        }
        else if(editorial != 'otra') {
            $('.otraeditorial').hide();
        }
    });

    $('select[name="recurso"]').on('change', function() {
        $('.recurso_error').addClass('hidden');
        recurso = $(this).val();
        console.log(recurso);
        
        if(recurso == 'otra') {
            $('.otrorecurso').show();
        }
        else if(recurso != 'otra') {
            $('.otrorecurso').hide();
        }
    });

    $('.otraeditorial, .otrorecurso, .recurso').hide();

    $('.siguiente_btn').on('click', function() {
        $('.siguiente_btn').addClass('hidden');

        var pathname = window.location.pathname;
        pathname = pathname.split("/");
        var year = pathname[2];
        console.log(year);

        localStorage.removeItem('year 2018');
        localStorage.removeItem('Year_'+year);

        if (notext) { 
            recurso = $('select[name="recurso"]').val();
            if(recurso == 0) {
                $('.recurso_error').removeClass('hidden');
                $('.siguiente_btn').removeClass('hidden');
            }
            else if(recurso == 'otra') {
                newrecurso = $('input:text[name="newrecurso"]').val();
                if(newrecurso == '' || newrecurso == null) {
                    $('.newrecurso_error').html('*Por favor indique el recurso empleado.');
                    $('.newrecurso_error').removeClass('hidden');
                    $('.siguiente_btn').removeClass('hidden');
                }
                else if(newrecurso.length <= 5) {
                    $('.newrecurso_error').html('*Nombre del recurso demasiado corto.');
                    $('.newrecurso_error').removeClass('hidden');
                    $('.siguiente_btn').removeClass('hidden');
                }
                else {
                    datayear = ["newrecurso", newrecurso];
                    localStorage.setItem('Year_'+year, datayear);
                    window.location = getRoute();
                }
            }
            else {
                datayear = ["recurso", recurso];
                localStorage.setItem('Year_'+year, datayear);
                window.location = getRoute();
            }
        }
        else {
            nombretexto = $('input:text[name="nombretexto"]').val();
            edicion = $('input:text[name="edicion"]').val();
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
                neweditorial = $('input:text[name="neweditorial"]').val();
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
                else if(edicion == '' || edicion == null) {
                    $('.edicion_error').removeClass('hidden');
                    $('.siguiente_btn').removeClass('hidden');
                }
                else if(edicion > 2021 || edicion < 1584 ) {
                    $('.edicion_error').removeClass('hidden');
                    $('.siguiente_btn').removeClass('hidden');
                }
                else {
                    datayear = ["texto", nombretexto, "new", neweditorial, edicion ];
                    localStorage.setItem('Year_'+year, datayear);
                    window.location = getRoute();
                }
            }
            else {
                datayear = ["texto", nombretexto, "old", editorial, edicion ];
                localStorage.setItem('Year_'+year, datayear);
                window.location = '/year/'+years[0];
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