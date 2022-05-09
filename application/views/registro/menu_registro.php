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
                <a class="dropdown-item" href="<?= base_url() ?>DatosBasicos/personales/<?= $id ?>">Información personal</a>
                    <a class="dropdown-item" href="<?= base_url() ?>DatosBasicos/ubicacion/<?= $id ?>">Información de ubicación</a>
                    <a class="dropdown-item" href="<?= base_url() ?>DatosBasicos/otros/<?= $id ?>">Otros datos</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Control preconcepcional <i class="mdi mdi-chevron-down"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="<?= base_url() ?>ConsultaPreconcepcional/paraclinicos/<?= $id ?>/1">Paraclinicos de primera consulta</a>
                    <a class="dropdown-item" href="<?= base_url() ?>ConsultaPreconcepcional/paraclinicos/<?= $id ?>/2">Paraclinicos de segunda consulta</a>
                </div>
            </li>
            <!-- Navbar dropdown -->
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Atención control prenatal <i class="mdi mdi-chevron-down"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="<?= base_url() ?>AtencionControlPrenatal/controlMensual/<?= $id ?>">Control Mensual</a>
                    <a class="dropdown-item" href="<?= base_url() ?>AtencionControlPrenatal/controlPrenatal/<?= $id ?>">Control Prenatal de Ingreso</a>
                    <a class="dropdown-item" href="<?= base_url() ?>AtencionControlPrenatal/formulaObstetrica/<?= $id ?>">Formula Obstetrica</a>
                    <a class="dropdown-item" href="<?= base_url() ?>AtencionControlPrenatal/otrasConsultas/<?= $id ?>">Otras Consultas</a>
                    <a class="dropdown-item" href="<?= base_url() ?>AtencionControlPrenatal/paraclinicos/<?= $id ?>">Paraclinicos</a>
                    <a class="dropdown-item" href="<?= base_url() ?>AtencionControlPrenatal/riesgos/<?= $id ?>">Riesgos</a>
                    <a class="dropdown-item" href="<?= base_url() ?>AtencionControlPrenatal/sustanciasPsicoactivas/<?= $id ?>">Sustancias Psicoactivas</a>
                    <a class="dropdown-item" href="<?= base_url() ?>AtencionControlPrenatal/vacunacion/<?= $id ?>">Vacunacion</a>
                    <a class="dropdown-item" href="<?= base_url() ?>AtencionControlPrenatal/violenciaIntrafamiliar/<?= $id ?>">Violencia Intrafamiliar</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Terminación del parto y lactancia <i class="mdi mdi-chevron-down"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="<?= base_url() ?>TerminacionParto/interrupcionVoluntaria/<?= $id ?>">Interrupción voluntaria</a>
                    <a class="dropdown-item" href="<?= base_url() ?>TerminacionParto/recienNacido/<?= $id ?>">Atención al recien nacido</a>
                    <a class="dropdown-item" href="<?= base_url() ?>TerminacionParto/atencionParto/<?= $id ?>">Atencion del parto</a>
                    <a class="dropdown-item" href="<?= base_url() ?>TerminacionParto/controlRecienNacidoMadre/<?= $id ?>">Control del recien nacido y la madre</a>
                </div>
            </li>
         </ul>
         <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->
</nav>