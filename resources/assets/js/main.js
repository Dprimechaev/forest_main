$(document).ready(function () {

    let counter = 2

    $('#addTier').on('click', function () {
        $('#tier').clone().prependTo( "#tierBody" );
        $('#tierId').html(counter)
        counter++;
    })

})
