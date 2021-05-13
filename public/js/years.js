let years = new Array();
$(document).ready(function() {
    $('body').scrollTop(0);
    
    $('input[type="checkbox"]').on('click', function(){
        $('.years_error').addClass('hidden');
    });
    $('.siguiente_btn').on('click', function() {
        $('.siguiente_btn').addClass('hidden');
        let years = [];

        localStorage.removeItem('Years');
        localStorage.removeItem('Year_2021');
        localStorage.removeItem('Year_2020');
        localStorage.removeItem('Year_2019');
        localStorage.removeItem('Year_2018');
        localStorage.removeItem('Year_2017');

        var check1 = $("#veintiuno").prop('checked');
        var check2 = $("#veinte").prop('checked');
        var check3 = $("#diecinueve").prop('checked');
        var check4 = $("#dieciocho").prop('checked');
        var check5 = $("#diecisiete").prop('checked');

        if (check1) { 
            years.push('2021');
        }
        if (check2) { 
            years.push('2020');
        }
        if (check3) { 
            years.push('2019');
        }
        if (check4) { 
            years.push('2018');
        }
        if (check5) { 
            years.push('2017');
        }

        if(!years.length) {
            $('.years_error').removeClass('hidden');
        }
        else {
            $('.years_error').addClass('hidden');
            localStorage.setItem('Years', years);
			window.location = '/year/'+years[0];
        }
    });
});