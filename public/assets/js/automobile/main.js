$(function() {
    $('.three-dots').on('click', function() {
        var plate = $(this).data('plate');
        $('#edit').attr("href", "automobile/edit/" + plate);
        $('#delete').attr("href", "automobile/delete/" + plate);
    });
    setTimeout(function() {
        $('.toast').fadeOut(500, function() {
            $(this).remove();
        });
    }, 5000);
});