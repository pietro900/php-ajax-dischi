var $ = require('jquery');

$(document).ready(function(){
    var template_html = $('#entry-template').html();
    var template_function = Handlebars.compile(template_html);
    //chiamata ajax per recuperare l'array di dischi dal file dischi.php
    $.ajax({
        'url': 'dischi.php',
        'method': 'GET',
        'success': function(dischi) {
            disegnaDisco(dischi);
        } ,
        'error': function() {
            alert('Errore');
        }
    });


function disegnaDisco(dischi) {

    var data = {
        'poster': '',
        'titolo': '',
        'author': '',
        'genere': '',
        'anno':''
    }
    for (var i = 0; i < dischi.length; i++) {
        var elemento_corrente = dischi[i];
        data.poster = elemento_corrente.poster;
        data.title = elemento_corrente.title;
        data.genre = elemento_corrente.genre;
        data.year = elemento_corrente.year;
        data.author = elemento_corrente.author;
        var html_finale = template_function(data);
        $('.cds-container').append(html_finale);
    }
}
});
