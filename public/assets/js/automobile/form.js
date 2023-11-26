$(function() {
    var today = new Date();
    $(".datepicker").datepicker({
        endDate: today,
        autoclose: true,
        todayHighlight: true,
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years",
        language: "pt-BR"
    });

    $('#img').on('change', function() {
        let url = $(this).val(),
            img = $('<img />', {
                class: "card-img-top",
                src: url
            }),
            card = $('<div />', {
                class: "card"
            }),
            icon = $('<i />', {
                class: 'bi bi-image fs-1 position-absolute top-50 start-50 translate-middle',
                id: 'i'
            }),
            div_default = card.append(icon);

        $('#container-img').children().remove();

        if(url == ''){
            $('#container-img').append(div_default);
            return;
        }

        $('#container-img').append(img);

    });
});