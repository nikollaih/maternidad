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
                        <i class="fas fa-tachometer-alt"></i>
                        <span data-key="t-dashboard">Inicio</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() ?>DatosBasicos/creacion">
                        <i class="fas fa-user-plus"></i>
                        <span data-key="t-dashboard">Nueva madre</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow" aria-expanded="true">
                        <i class="fas fa-cogs"></i>
                        <span data-key="t-authentication">Cfg básica</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false" style="">
                        <li>
                            <a href="<?= base_url() ?>Configuracion/listar/2" data-key="t-login">Estados</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>Configuracion/listar/3" data-key="t-login">Etnias</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>Configuracion/listar/5" data-key="t-login">Genero</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>Configuracion/listar/9" data-key="t-login">Municipios</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>Configuracion/listar/11" data-key="t-login">Nivel Educativo</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>Configuracion/listar/16" data-key="t-login">Tipos de documentos</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>Configuracion/listar/19" data-key="t-login">Zonas</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow" aria-expanded="true">
                        <i class="fas fa-cogs"></i>
                        <span data-key="t-authentication">Cfg específica</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false" style="">
                        <li>
                            <a href="<?= base_url() ?>Configuracion/listar/0" data-key="t-login">Discapacidades</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>Configuracion/listar/21" data-key="t-login">Dx</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>Configuracion/listar/1" data-key="t-login">Eps</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>Configuracion/listar/20" data-key="t-login">Estado de conciencia</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>Configuracion/listar/6" data-key="t-login">Interconsultas</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>Configuracion/listar/20" data-key="t-login">Ingreso tardío</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>Configuracion/listar/7" data-key="t-login">Ips</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>Configuracion/listar/10" data-key="t-login">Métodos de planificación</a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" data-key="t-level-1-2">Paraclínicos</a>
                            <ul class="sub-menu mm-collapse" aria-expanded="true">
                                <li>
                                    <a href="<?= base_url() ?>Configuracion/listar/14" data-key="t-level-2-1">Resultados</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>Configuracion/paraclinicos" data-key="t-level-2-1">Tipos de paraclinicos</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>Configuracion/listar/12" data-key="t-login">Poblaciones</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>Configuracion/listar/13" data-key="t-login">Regimenes</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>Configuracion/listar/15" data-key="t-login">Riesgos</a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" data-key="t-level-1-2">SPA</a>
                            <ul class="sub-menu mm-collapse" aria-expanded="true">
                                <li>
                                    <a href="<?= base_url() ?>Configuracion/listar/4" data-key="t-login">Frecuencias de consumo</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>Configuracion/listar/8" data-key="t-login">Tipos de Spa</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" data-key="t-level-1-2">Terminación embarazo</a>
                            <ul class="sub-menu mm-collapse" aria-expanded="true">
                                <li>
                                    <a href="<?= base_url() ?>Configuracion/listar/17" data-key="t-login">Tipos de parto</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>Configuracion/listar/18" data-key="t-login">Vacunas</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?= base_url() ?>Estadisticas">
                        <i class="fas fa-chart-pie"></i>
                        <span data-key="t-dashboard">Estadisticas</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow" aria-expanded="true">
                        <i class="fas fa-users"></i>
                        <span data-key="t-authentication">Usuarios</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false" style="">
                        <li>
                            <a href="<?= base_url() ?>Usuarios/agregar" data-key="t-login">Nuevo</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>Usuarios" data-key="t-login">Lista</a>
                        </li>
                    </ul>
                </li>
                <!-- Invitados -->
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>