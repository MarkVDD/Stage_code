// Start van klok
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('clock').innerHTML = h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}

function checkTime(i) {
    if (i < 10) { i = "0" + i };
    return i;
}

// Einde van klok

// Nieuwe post data versturen naar c_post.php

$(document).ready(function() {
    startTime();
    $('#ajaxForm').submit(function (event) {
        $this = $(this);
        // Ontvangen van de form data.
        var formData = {
            'p_title': $('input[name=p_title]').val(),
            'p_author': $('input[name=p_author]').val(),
            'p_content': $('textarea[name=p_content]').val()
        };

        // Form processen
        $.ajax({
            type: 'POST',
            url: 'c_post.php', // De plek waar we de gegevens toe willen sturen.
            data: formData, // Ons data object.
            dataType: 'json', // Wat voor type data wij terug verwachten.
            encode: true
        })
            // Als dit klaar is. doe dat;
            .done(function (data) {

                // Data in console laten zien zodat we zien dat het succesvol is toegevoegd.
                console.log(data);

                if(data.success == true) {
                swal('Hey!', 'Bedankt voor het toevoegen van de post', 'success');
                $this.trigger('reset');
                } else {
                    var errorString = "";
                    $.each(data.errors, function (err, val) {
                        errorString += val + "\n";
                    });

                    swal('Er is een probleem opgetreden', errorString, 'error');
                }
            });

        // Het stoppen van het refreshen van de pagina wanneer er op de verzend knop wordt gedrukt.
        event.preventDefault();
    });
});
// Einde van het versturen van de post.