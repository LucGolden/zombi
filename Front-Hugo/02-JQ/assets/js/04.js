
$('#MonFormulaire').submit( function(e){
        e.preventDefault();
        $('[action="traitement.php').hide('slow');
    // $('<p>').append('Bonjour ' + $('#nomcomplet').val() + '!').appendTo('body');

    // $('<p> Bonjour ' + $('#nomcomplet').val() + ' !</p>').appendTo('body');

    $(this).replaceWith('<p> Bonjour ' + $('#nomcomplet').val() + ' !</p>').appendTo('body');

        // $('#element').html('abc');
    })
