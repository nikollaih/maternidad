<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Asignaciones</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>">Inicio</a></li>
                            <li class="breadcrumb-item active">Asignaciones</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
        <?php
            if($asignaciones){
                foreach ($asignaciones as $a){
                    ?>
                        <div class="col-md-3">
                            <div class="card custom-radius">
                                <img width="100%" src="<?= base_url() ?>assets/images/botones/materias/<?= $a["icomateria"] ?>" alt="">
                            </div>
                        </div>
                    <?php
                }
            }
        ?>
        </div>
    </div>
    <!-- container-fluid -->
</div>