<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="<?= base_url() ?>" class="logo logo-dark">
                    <span class="logo-sm">
                        Mat.
                    </span>
                    <span class="logo-lg">
                        Maternidad    
                    </span>
                </a>

                <a href="<?= base_url() ?>" class="logo logo-light">
                    <span class="logo-sm">
                        Mat.
                    </span>
                    <span class="logo-lg">
                    Maternidad
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

        </div>

        <div class="d-flex">
            <div class="dropdown d-inline-block">
                <?php
                    if(is_logged()){
                ?>
                        <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d-none d-xl-inline-block ms-1 fw-medium">Hola, <?= (logged_user()["nombre"]) ?></span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="<?= base_url() ?>Auth/do_logout"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Cerrar Sesion</a>
                        </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</header>