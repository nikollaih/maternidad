jQuery(document).on("change", ".select-toggle", function() {
    let class_name = jQuery(this).attr("data-class");
    if (jQuery(this).val() == "-1") {
        jQuery("." + class_name).removeClass("d-none");
    } else {
        jQuery("." + class_name).addClass("d-none");
    }
});

// A $( document ).ready() block.
$(document).ready(function() {
    $('.searchable-select').selectize();

    jQuery(document).on("change", ".input-fum", function() {
        let fum = moment($(this).val());
        let fpp = getFPP(fum);
        let edad_gestacional = (moment().diff(fum, 'days') / 7).toFixed(3);
        $("#fpp").val(fpp.format('Y-MM-DD'));
        $("#dias_parto").val(fpp.diff(moment(), 'days'));
        $("#edad_gestacional").val(edad_gestacional);
        $("#alarma_parto").val(getAlarmaParto(fpp.diff(moment(), 'days')));
    });
});

function getFPP(fum) {
    let first_date = moment(fum).add(7, 'days');
    let second_date = moment(first_date).add(1, 'year');
    let third_date = moment(second_date).subtract(3, 'months');
    return third_date;
}

function getAlarmaParto(weeks = 0) {
    console.log(weeks);
    switch (true) {
        case weeks < 0:
            return "Nacido";
            break;
        case weeks <= 7:
            return "Semana de parto";
            break;
        case weeks <= 28:
            return "Menos de 4 semanas";
            break;
        case weeks > 28:
            return "Pendiente";
            break;
        default:
            return "Pendiente";
            break;
    }
}