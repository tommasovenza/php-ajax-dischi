$(document).ready(function() {

    $.ajax({
        
        url: 'http://localhost:8888/php-ajax-dischi/server.php',
        method: 'GET',

        success: function() {

        },
        
        error: function() {
            alert('qualcosa non va!');
        }
        
    }); // fine chiamata ajax

}); // end document ready