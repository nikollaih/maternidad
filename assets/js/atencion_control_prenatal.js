jQuery(document).on("click", ".delete-formula-obstetrica", function() {
    let id = jQuery(this).attr("data-id");
    delete_formula_obstetrica(id);
});

function delete_formula_obstetrica(id) {
    swal({
            title: '¿Estás seguro?',
            text: 'La fórmula obstétrica eliminada!',
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Si, Eliminar!',
            closeOnConfirm: false,
            showLoaderOnConfirm: true
        },
        function() {
            jQuery.post(base_url + "Atencion_Control_Prenatal/delete_formula_obstetrica", { id: id },
                function(data) {
                    console.log(data)
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