String.prototype.capitalize = function() {
    return this.replace(/(^|\s)\S/g, l => l.toUpperCase());
}
var envio;
var dataDoc;
var dataIns;
var dataEncuesta;
var data2021;

$(document).ready(function() {
    var pathname = window.location.pathname;
    pathname = pathname.split("/");
    var route = pathname[2];

    if(route == 'saved') {
        $('.home_btn').hide();
    } else if(route == 'cancel') {
        $('.home_btn').show();
    }

    docente();
});
//docente
function docente() {
    if(localStorage.getItem('Nombre') != undefined) {
        dataDoc = {
            tipo: 'docente',
            _token: $('input[name="_token"]').val(),
            nombre: localStorage.getItem('Nombre').capitalize(),
            apellido: localStorage.getItem('Apellido').capitalize(),
            correo: localStorage.getItem('Correo'),
            telefono: localStorage.getItem('Telefono'),
            id_genero: localStorage.getItem('Género')
        }
    }
    else if(localStorage.getItem('Género') != undefined){
        dataDoc = {
            tipo: 'docente',
            _token: $('input[name="_token"]').val(),
            id_genero: localStorage.getItem('Género')
        }
    }
    else {
        $(".alert_error .title").html('Error');
        $(".alert_error .descripcion span").html('No se encontraron datos de la encuesta.<br>No sabemos como llego hasta aquí.');
        $(".alert_error, .home_btn").show();
    }
    if(localStorage.getItem('Nombre') != undefined || localStorage.getItem('Género') != undefined) {
        envio = 'docente';
        insert(envio, dataDoc);
    }
}

//institucion
function institucion() {
    if(localStorage.getItem('Nombre_institucion') != undefined) {
        dataIns = {
            tipo: 'institucion',
            _token: $('input[name="_token"]').val(),
            id_localidad: localStorage.getItem('Localidad'),
            id_tipo_institucion: localStorage.getItem('Tipo_institucion'),
            nombre_institucion: localStorage.getItem('Nombre_institucion').capitalize(),
        }
    }
    else {
        $(".alert_error .title").html('Error');
        $(".alert_error .descripcion span").html('No se encontraron datos de la encuesta.<br>No sabemos como llego hasta aquí.');
        $(".alert_error, .home_btn").show();
    }
    if(localStorage.getItem('Nombre_institucion') != undefined) {
        envio = 'institucion';
        insert(envio, dataIns);
    }
    
}

 //encuesta
function encuesta() {
    if (localStorage.getItem('Asignatura') != undefined) {
        dataEncuesta = {
            tipo: 'encuesta',
            _token: $('input[name="_token"]').val(),
            id_docente: localStorage.getItem('id_docente'),
            id_institucion: localStorage.getItem('id_institucion'),
            id_asignatura: localStorage.getItem('Asignatura'),
        }
    }
    else {
        $(".alert_error .title").html('Error');
        $(".alert_error .descripcion span").html('No se encontraron datos de la encuesta.<br>No sabemos como llego hasta aquí.');
        $(".alert_error, .home_btn").show();
    }
    if(localStorage.getItem('Asignatura') != undefined) {
        envio = 'encuesta';
        insert(envio, dataEncuesta);
    }
}

//2021
function yearuno() {
    if(localStorage.getItem('Year_2021') != undefined) {
        var year_2021 = localStorage.getItem('Year_2021');
        year_2021 = year_2021.split(',');
        if(year_2021[0] == 'texto') {
            if(year_2021[2] == 'old') {
                data2021 = {
                    tipo: 'year_old',
                    _token: $('input[name="_token"]').val(),
                    texto_nombre: year_2021[1],
                    id_editorial: year_2021[3],
                    year_edicion: year_2021[4],
                    id_encuesta: localStorage.getItem('id_encuesta'),
                    id_tipo_recurso: '1',
                    year_recurso: '2021',
                }
            }
            else {
                data2021 = {
                    tipo: 'year_new',
                    _token: $('input[name="_token"]').val(),
                    texto_nombre: year_2021[1],
                    nombre_editorial: year_2021[3],
                    year_edicion: year_2021[4],
                    id_encuesta: localStorage.getItem('id_encuesta'),
                    id_tipo_recurso: '1',
                    year_recurso: '2021',
                }
            }
        }
        else {
            data2021 = {
                tipo: 'year_recursos',
                _token: $('input[name="_token"]').val(),
                recurso_nombre: year_2021[1],
                id_encuesta: localStorage.getItem('id_encuesta'),
                year_recurso: '2021',
            }
        }
        
    }
    if(localStorage.getItem('Year_2021') != undefined) {
        envio = 'year1';
        insert(envio, data2021);
    }
    else {
        yeardos();
    }
    
}
//2020
function yeardos() {
    if(localStorage.getItem('Year_2020') != undefined) {
        var year_2020 = localStorage.getItem('Year_2020');
        year_2020 = year_2020.split(',');
        if(year_2020[0] == 'texto') {
            if(year_2020[2] == 'old') {
                data2020 = {
                    tipo: 'year_old',
                    _token: $('input[name="_token"]').val(),
                    texto_nombre: year_2020[1],
                    id_editorial: year_2020[3],
                    year_edicion: year_2020[4],
                    id_encuesta: localStorage.getItem('id_encuesta'),
                    id_tipo_recurso: '1',
                    year_recurso: '2020',
                }
            }
            else {
                data2020 = {
                    tipo: 'year_new',
                    _token: $('input[name="_token"]').val(),
                    texto_nombre: year_2020[1],
                    nombre_editorial: year_2020[3],
                    year_edicion: year_2020[4],
                    id_encuesta: localStorage.getItem('id_encuesta'),
                    id_tipo_recurso: '1',
                    year_recurso: '2020',
                }
            }
        }
        else {
            data2020 = {
                tipo: 'year_recursos',
                _token: $('input[name="_token"]').val(),
                recurso_nombre: year_2020[1],
                id_encuesta: localStorage.getItem('id_encuesta'),
                year_recurso: '2020',
            }
        }
        
    }
    if(localStorage.getItem('Year_2020') != undefined) {
        envio = 'year2';
        insert(envio, data2020);
    }
    else {
        yeartres();
    }
    
}
//2019
function yeartres() {
    if(localStorage.getItem('Year_2019') != undefined) {
        var year_2019 = localStorage.getItem('Year_2019');
        year_2019 = year_2019.split(',');
        if(year_2019[0] == 'texto') {
            if(year_2019[2] == 'old') {
                data2019 = {
                    tipo: 'year_old',
                    _token: $('input[name="_token"]').val(),
                    texto_nombre: year_2019[1],
                    id_editorial: year_2019[3],
                    year_edicion: year_2019[4],
                    id_encuesta: localStorage.getItem('id_encuesta'),
                    id_tipo_recurso: '1',
                    year_recurso: '2019',
                }
            }
            else {
                data2019 = {
                    tipo: 'year_new',
                    _token: $('input[name="_token"]').val(),
                    texto_nombre: year_2019[1],
                    nombre_editorial: year_2019[3],
                    year_edicion: year_2019[4],
                    id_encuesta: localStorage.getItem('id_encuesta'),
                    id_tipo_recurso: '1',
                    year_recurso: '2019',
                }
            }
        }
        else {
            data2019 = {
                tipo: 'year_recursos',
                _token: $('input[name="_token"]').val(),
                recurso_nombre: year_2019[1],
                id_encuesta: localStorage.getItem('id_encuesta'),
                year_recurso: '2019',
            }
        }
        
    }
    if(localStorage.getItem('Year_2019') != undefined) {
        envio = 'year3';
        insert(envio, data2019);
    }
    else {
        yearcuatro();
    }
    
}
//2018
function yearcuatro() {
    if(localStorage.getItem('Year_2018') != undefined) {
        var year_2018 = localStorage.getItem('Year_2018');
        year_2018 = year_2018.split(',');
        if(year_2018[0] == 'texto') {
            if(year_2018[2] == 'old') {
                data2018 = {
                    tipo: 'year_old',
                    _token: $('input[name="_token"]').val(),
                    texto_nombre: year_2018[1],
                    id_editorial: year_2018[3],
                    year_edicion: year_2018[4],
                    id_encuesta: localStorage.getItem('id_encuesta'),
                    id_tipo_recurso: '1',
                    year_recurso: '2018',
                }
            }
            else {
                data2018 = {
                    tipo: 'year_new',
                    _token: $('input[name="_token"]').val(),
                    texto_nombre: year_2018[1],
                    nombre_editorial: year_2018[3],
                    year_edicion: year_2018[4],
                    id_encuesta: localStorage.getItem('id_encuesta'),
                    id_tipo_recurso: '1',
                    year_recurso: '2018',
                }
            }
        }
        else {
            data2018 = {
                tipo: 'year_recursos',
                _token: $('input[name="_token"]').val(),
                recurso_nombre: year_2018[1],
                id_encuesta: localStorage.getItem('id_encuesta'),
                year_recurso: '2018',
            }
        }
        
    }
    if(localStorage.getItem('Year_2018') != undefined) {
        envio = 'year4';
        insert(envio, data2018);
    }
    else {
        yearcinco();
    }
    
}
//2017
function yearcinco() {
    if(localStorage.getItem('Year_2017') != undefined) {
        var year_2017 = localStorage.getItem('Year_2017');
        year_2017 = year_2017.split(',');
        if(year_2017[0] == 'texto') {
            if(year_2017[2] == 'old') {
                data2017 = {
                    tipo: 'year_old',
                    _token: $('input[name="_token"]').val(),
                    texto_nombre: year_2017[1],
                    id_editorial: year_2017[3],
                    year_edicion: year_2017[4],
                    id_encuesta: localStorage.getItem('id_encuesta'),
                    id_tipo_recurso: '1',
                    year_recurso: '2017',
                }
            }
            else {
                data2017 = {
                    tipo: 'year_new',
                    _token: $('input[name="_token"]').val(),
                    texto_nombre: year_2017[1],
                    nombre_editorial: year_2017[3],
                    year_edicion: year_2017[4],
                    id_encuesta: localStorage.getItem('id_encuesta'),
                    id_tipo_recurso: '1',
                    year_recurso: '2017',
                }
            }
        }
        else {
            data2017 = {
                tipo: 'year_recursos',
                _token: $('input[name="_token"]').val(),
                recurso_nombre: year_2017[1],
                id_encuesta: localStorage.getItem('id_encuesta'),
                year_recurso: '2017',
            }
        }
        
    }
    if(localStorage.getItem('Year_2017') != undefined) {
        envio = 'year5';
        insert(envio, data2017);
    }
    else {
        $(".alert_saved").hide();
        $(".alert_exito").removeClass('hidden');
        localStorage.clear();
    }
    
}