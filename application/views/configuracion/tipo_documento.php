<div class="page-content form-view">
   <div class="container-fluid">
      <div class="row">
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
         <div class="col-md-6">
            <div class="card">
               <div class="card-header">Crear tipo de documento</div>
               <div class="card-body">
                  <form>
                     <!-- 2 column grid layout with text inputs for the first and last names -->
                     <div class="row mb-4">
                        <div class="col">
                           <div class="form-outline">
                              <label class="form-label" for="form6Example1">Codigo</label>
                              <input type="text" id="form6Example1" class="form-control" />
                           </div>
                        </div>
                        <div class="col">
                           <div class="form-outline">
                              <label class="form-label" for="form6Example2">Descripción</label>
                              <input type="text" id="form6Example2" class="form-control" />
                           </div>
                        </div>
                     </div>
                   
                     <!-- Email input -->
                     <!-- Checkbox -->
                     <!-- Submit button -->
                     <button type="submit" class="btn btn-primary btn-block mb-4">Guardar</button>
                  </form>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="row">
               <div class="col-md-12">
                  <div class="card">
                     <div class="card-header">Tipos de documentos</div>
                     <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <td><strong>Codigo</strong></td>
                                    <td><strong>Descripción</strong></td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if($tipo_documentos){
                                        foreach ($tipo_documentos as $td) {
                                ?>
                                        <tr>
                                            <td><?= $td["codigo"] ?></td>
                                            <td><?= $td["nombre"] ?></td>
                                        </tr>
                                <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- container-fluid -->
</div>