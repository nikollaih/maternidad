<div class="page-content form-view">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
               <h4 class="mb-sm-0 font-size-18"><?= $title ." - ".$subtitle ?></h4>
               <div class="page-title-right">
                  <ol class="breadcrumb m-0">
                     <li class="breadcrumb-item"><a href="<?= base_url() ?>"><?= $title ?></a></li>
                     <li class="breadcrumb-item active"><?= $subtitle ?></li>
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
                  <?= $formulario ?>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- container-fluid -->
</div>