<nav class="navbar navbar-expand-lg navbar-light bg-light perfil-menu mt-4">
      <!-- Toggle button -->
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarLeftAlignExample">
         <!-- Left links -->
         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         <li class="nav-item dropdown">
                <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Datos básicos <i class="mdi mdi-chevron-down"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="<?= base_url() ?>DatosBasicos/personales/1">Información personal</a>
                    <a class="dropdown-item" href="<?= base_url() ?>DatosBasicos/ubicacion/1">Información de ubicación</a>
                    <a class="dropdown-item" href="<?= base_url() ?>DatosBasicos/otros/1">Otros datos</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Control preconcepcional <i class="mdi mdi-chevron-down"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="<?= base_url() ?>ConsultaPreconcepcional/paraclinicos/1/1">Paraclinicos de primera consulta</a>
                    <a class="dropdown-item" href="<?= base_url() ?>ConsultaPreconcepcional/paraclinicos/1/2">Paraclinicos de segunda consulta</a>
                </div>
            </li>
            <!-- Navbar dropdown -->
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Atención control prenatal <i class="mdi mdi-chevron-down"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="<?= base_url() ?>AtencionControlPrenatal/controlMensual/1">Control Mensual</a>
                    <a class="dropdown-item" href="<?= base_url() ?>AtencionControlPrenatal/controlPrenatal/1">Control Prenatal</a>
                    <a class="dropdown-item" href="<?= base_url() ?>AtencionControlPrenatal/formulaObstetrica/1">Formula Obstetrica</a>
                    <a class="dropdown-item" href="<?= base_url() ?>AtencionControlPrenatal/otrasConsultas/1">Otras Consultas</a>
                    <a class="dropdown-item" href="<?= base_url() ?>AtencionControlPrenatal/paraclinicos/1">Paraclinicos</a>
                    <a class="dropdown-item" href="<?= base_url() ?>AtencionControlPrenatal/sustanciasPsicoactivas/1">Sustancias Psicoactivas</a>
                    <a class="dropdown-item" href="<?= base_url() ?>AtencionControlPrenatal/vacunacion/1">Vacunacion</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Terminación del parto y lactancia <i class="mdi mdi-chevron-down"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
         </ul>
         <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->
</nav>