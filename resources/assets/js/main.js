$(document).ready(function () {

    let counter = 2

    $('#addTier').on('click', function () {
        $('#tier').clone().prependTo("#tierBody");
        $('#tierId').html(counter)
        counter++;
    })


    $('#buttonSum').on('click', function (e) {
        e.preventDefault()
        $('td', '.tierCopy').each(function (index) {
            console.log(index + ": " + $(this).text());
        });
    })
})
