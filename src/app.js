$(document).ready(function() {

    $.ajax({
        
        url: 'http://localhost:8888/php-ajax-dischi/server.php',
        method: 'GET',

        success: function(data) {
        
            stampaDischi(data);
        },
        
        error: function() {
            alert('qualcosa non va!');
        }
        
    }); // fine chiamata ajax


    // funzione che stampa i dischi
    function stampaDischi(data) {

        var source = $('#entry-template').html();
        var template = Handlebars.compile(source);

        for (var index = 0; index < data.length; index++) {
            
            var discoSingolo = data[index];

            var immagineDisco = discoSingolo.poster;
            var titolo = discoSingolo.title;
            var autore = discoSingolo.author;
            var anno = discoSingolo.year;

            var context = {
                poster: immagineDisco,
                title: titolo,
                author: autore,
                year: anno
            }
            
            var html = template(context);

            $('#cds-container').append(html);
        }   // fine ciclo for

    } // fine funzione

}); // end document ready

