<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menú</li>
                <!-- Invitados -->
                <li>
                    <a href="<?= base_url() ?>">
                        <i class="fas fa-cogs"></i>
                        <span data-key="t-dashboard">Configuraciones</span>
                    </a>
                </li>

                <li class="">
                    <a href="javascript: void(0);" class="has-arrow" aria-expanded="false">
                    <i class="fas fa-cogs"></i>
                        <span data-key="t-authentication">Configuraciones</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false" style="height: 0px;">
                        <li><a href="<?= base_url() ?>TipoDocumento/config" data-key="t-login">Tipos de documentos</a></li>
                    </ul>
                </li>

                <li>
                    <a href="<?= base_url() ?>Registro/datos_basicos">
                        <i class="fas fa-users"></i>
                        <span data-key="t-dashboard">Gestionar Pacientes</span>
                    </a>
                </li>
                <!-- Invitados -->
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>