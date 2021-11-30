<div class="col-md-12">
    <div class="card" style="overflow: visible !important;">
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-sm order-2 order-sm-1">
                    <div class="d-flex align-items-start mt-3 mt-sm-0">
                    <div class="flex-shrink-0">
                        <div class="avatar-xl me-3">
                            <img src="<?= base_url() ?>assets/images/avatar.png" alt="" class="img-fluid rounded-circle d-block">
                        </div>
                    </div>
                    <div class="flex-grow-1">
                        <div>
                            <h5 class="font-size-16 mb-1"><?=$info_perfil['nombre']?></h5>
                            <p class="text-muted font-size-13"><?=$info_perfil['edad']?> Años</p>
                            <div class="d-flex flex-wrap align-items-start gap-2 gap-lg-3 text-muted font-size-13">
                                <div><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i><?=$info_perfil['estado']?></div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-auto order-1 order-sm-2">
                    <div class="d-flex align-items-start justify-content-end gap-2">
                    <div>
                        <span class="tag"><?=$info_perfil['eps']?></span>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <?php $this->load->view("registro/menu_registro") ?>
                </div>
            </div>
        </div>
        <!-- end card body -->
    </div>
</div>