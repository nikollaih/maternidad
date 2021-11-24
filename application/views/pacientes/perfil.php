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
         <div class="card">
            <div class="card-body">
               <div class="row">
                  <div class="col-sm order-2 order-sm-1">
                     <div class="d-flex align-items-start mt-3 mt-sm-0">
                        <div class="flex-shrink-0">
                           <div class="avatar-xl me-3">
                              <img src="https://lorempixel.com/200/200/" alt="" class="img-fluid rounded-circle d-block">
                           </div>
                        </div>
                        <div class="flex-grow-1">
                           <div>
                              <h5 class="font-size-16 mb-1">Nombre paciente</h5>
                              <p class="text-muted font-size-13">Edad</p>
                              <div class="d-flex flex-wrap align-items-start gap-2 gap-lg-3 text-muted font-size-13">
                                 <div><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Estado</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-auto order-1 order-sm-2">
                     <div class="d-flex align-items-start justify-content-end gap-2">
                        <div>
                           <span class="tag">EPS</span>
                        </div>
                     </div>
                  </div>
               </div>
               <ul class="nav nav-tabs-custom card-header-tabs border-top mt-4" id="pills-tab" role="tablist">
                  <li class="nav-item">
                     <a class="nav-link px-3 active" data-bs-toggle="tab" href="#personales" role="tab">Información personal</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link px-3" data-bs-toggle="tab" href="#ubicacion" role="tab">Información de ubicación</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link px-3" data-bs-toggle="tab" href="#otros" role="tab">Otros datos</a>
                  </li>
               </ul>
            </div>
            <!-- end card body -->
         </div>
      </div>
      <div class="row">
         <div class="col-md-9" style="padding-left:0;">
            <div class="tab-content">
               <div class="tab-pane active" id="personales" role="tabpanel">
                  <?php
                     $this->load->view('registro/datosBasicos/datos_personales');
                  ?>
               </div>
               <div class="tab-pane" id="ubicacion" role="tabpanel">
                  <?php
                     $this->load->view('registro/datosBasicos/datos_ubicacion');
                  ?>
               </div>
               <div class="tab-pane" id="otros" role="tabpanel">
                  <?php
                     $this->load->view('registro/datosBasicos/otros_datos');
                  ?>
               </div>   
            </div>
         </div>
         <div class="col-md-3" style="padding-right:0;">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title mb-3">Portfolio</h5>
                  <div>
                     <ul class="list-unstyled mb-0">
                        <li>
                           <a href="#" class="py-2 d-block text-muted"><i class="mdi mdi-web text-primary me-1"></i> Website</a>
                        </li>
                        <li>
                           <a href="#" class="py-2 d-block text-muted"><i class="mdi mdi-note-text-outline text-primary me-1"></i> Blog</a>
                        </li>
                     </ul>
                  </div>
               </div>
               <!-- end card body -->
            </div>
         </div>
      </div>
   </div>
   <!-- container-fluid -->
</div>