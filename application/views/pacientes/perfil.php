<div class="page-content form-view">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
               <h4 class="mb-sm-0 font-size-18"><?= $title ?></h4>
               <div class="page-title-right">
                  <ol class="breadcrumb m-0">
                     <li class="breadcrumb-item"><a href="<?= base_url() ?>">Lista de pacientes</a></li>
                     <li class="breadcrumb-item active"><?= $title ?></li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <?php
            $this->load->view('registro/info_perfil');
         ?>
      </div>
      <div class="row">
         <div class="col-md-12" style="padding-left:0;">
            <div>
               <div id="personales">
                  <?php
                     $this->load->view('registro/datosBasicos/datos_personales');
                  ?>
               </div>
               <div id="ubicacion">
                  <?php
                     $this->load->view('registro/datosBasicos/datos_ubicacion');
                  ?>
               </div>
               <div id="otros">
                  <?php
                     $this->load->view('registro/datosBasicos/otros_datos');
                  ?>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- container-fluid -->
</div>