$('#render-btn').on('click', function () {
    const renderWorkerFile = document.location.origin + "/php/render-worker.php";

    // Sends a message to console
    console.log('Button has been clicked');

    // Fire an HTTP call with a POST action to the file '/php/render-worker.php'
    $.post(renderWorkerFile, {
        action: 'get_render_value'
    }).done(function (data) {
        // Send the POST result to console
        console.log(data);

        // Use jQuery to render the returned value to the html element with the id '#render-container'
        $('#render-container').empty().append(data.result);
    });
});