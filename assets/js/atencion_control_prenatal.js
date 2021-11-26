jQuery(document).on("click", ".delete-formula-obstetrica", function() {
    let id = jQuery(this).attr("data-id");
    delete_row(id, "Atencion_Control_Prenatal/delete_formula_obstetrica", "La fórmula obstétrica eliminada!");
});

jQuery(document).on("click", ".delete-sustancia-psicoactiva", function() {
    let id = jQuery(this).attr("data-id");
    delete_row(id, "Atencion_Control_Prenatal/delete_sustancias_psicoactivas", 'El registro será eliminado!');
});

jQuery(document).on("click", ".delete-vacunacion", function() {
    let id = jQuery(this).attr("data-id");
    delete_row(id, "Atencion_Control_Prenatal/delete_vacunacion", 'La vacuna será eliminada!');
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