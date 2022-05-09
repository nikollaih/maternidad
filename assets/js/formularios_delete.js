jQuery(document).on("click", ".delete-formula-obstetrica", function() {
    let id = jQuery(this).attr("data-id");
    delete_row(id, "AtencionControlPrenatal/delete_formula_obstetrica", "La fórmula obstétrica eliminada!");
});

jQuery(document).on("click", ".delete-sustancia-psicoactiva", function() {
    let id = jQuery(this).attr("data-id");
    delete_row(id, "AtencionControlPrenatal/delete_sustancias_psicoactivas", 'El registro será eliminado!');
});

jQuery(document).on("click", ".delete-vacunacion", function() {
    let id = jQuery(this).attr("data-id");
    delete_row(id, "AtencionControlPrenatal/delete_vacunacion", 'La vacuna será eliminada!');
});

jQuery(document).on("click", ".delete-paraclinico", function() {
    let id = jQuery(this).attr("data-id");
    delete_row(id, "AtencionControlPrenatal/delete_paraclinico", 'El paraclinico será eliminado!');
});

jQuery(document).on("click", ".delete-control-prenatal", function() {
    let id = jQuery(this).attr("data-id");
    delete_row(id, "AtencionControlPrenatal/delete_control_prenatal", 'El control prenatal será eliminado!');
});

jQuery(document).on("click", ".delete-control-mensual", function() {
    let id = jQuery(this).attr("data-id");
    delete_row(id, "AtencionControlPrenatal/delete_control_mensual", 'El control mensual será eliminado!');
});

jQuery(document).on("click", ".delete-otras-consultas", function() {
    let id = jQuery(this).attr("data-id");
    delete_row(id, "AtencionControlPrenatal/delete_otras_consultas", 'La consulta será eliminada!');
});

jQuery(document).on("click", ".delete-riesgo", function() {
    let id = jQuery(this).attr("data-id");
    delete_row(id, "AtencionControlPrenatal/delete_riesgo", 'El riesgo será eliminada!');
});

jQuery(document).on("click", ".delete-violencia-intrafamiliar", function() {
    let id = jQuery(this).attr("data-id");
    delete_row(id, "AtencionControlPrenatal/delete_violencia_intrafamiliar", 'El registro será eliminado!');
});

jQuery(document).on("click", ".delete-paraclinico-preconcepcional", function() {
    let id = jQuery(this).attr("data-id");
    delete_row(id, "ConsultaPreconcepcional/delete_paraclinico", 'El paraclinico será eliminada!');
});

jQuery(document).on("click", ".delete-terminacion-voluntaria", function() {
    let id = jQuery(this).attr("data-id");
    delete_row(id, "TerminacionParto/delete_interrupcion_voluntaria", 'El registro será eliminado!');
});

jQuery(document).on("click", ".delete-recien-nacido", function() {
    let id = jQuery(this).attr("data-id");
    delete_row(id, "TerminacionParto/delete_recien_nacido", 'El registro será eliminado!');
});

jQuery(document).on("click", ".delete-atencion-parto", function() {
    let id = jQuery(this).attr("data-id");
    delete_row(id, "TerminacionParto/delete_atencion_parto", 'El registro será eliminado!');
});

jQuery(document).on("click", ".delete-control-recien-nacido-madre", function() {
    let id = jQuery(this).attr("data-id");
    delete_row(id, "TerminacionParto/delete_control_recien_nacido_madre", 'El control será eliminado!');
});

function delete_row(id, url, text) {
    swal({
            title: '¿Estás seguro?',
            text: text,
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Si, Eliminar!',
            closeOnConfirm: false,
            showLoaderOnConfirm: true
        },
        function() {
            jQuery.post(base_url + url, { id: id },
                function(data) {
                    if (data.status) {
                        swal({
                                title: 'Eliminado',
                                text: data.message,
                                type: 'success',
                                showCancelButton: false,
                                confirmButtonText: 'Continuar',
                                closeOnConfirm: true,
                                showLoaderOnConfirm: true
                            },
                            function() {
                                location.reload();
                            })
                    } else {
                        swal({
                            title: 'Error!',
                            text: data.message,
                            type: 'warning',
                            confirmButtonText: 'Continuar',
                        });
                    }
                }, 'json')
        });
}