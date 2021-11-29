<div class="page-content form-view">
   <div class="container-fluid">
      <div class="row align-items-end">
         <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
               <h4 class="mb-sm-0 font-size-18"><?= $subtitle ?></h4>
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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Buscar paciente</div>
                    <div class="card-body">
                    <div class="row">
                        <div class="col-md-10 col-sm-12 mb-4">
                           <div class="form-outline">
                              <input type="text" style="font-size: 25px;" id="dx" name="dx" class="form-control" placeholder="Número de documento" />
                           </div>
                        </div>
                        <div class="col-md-2 col-sm-12 mb-4 align-items-middle justify-content-middle text-center">
                           <div class="form-outline">
                              <button class="btn btn-lg btn-primary">Buscar</button>
                           </div>
                     </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Lista pacientes</div>
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>
        </div>
   </div>
   <!-- container-fluid -->
</div>