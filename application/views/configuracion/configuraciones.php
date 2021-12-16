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
         <div class="col-md-12">
            <div class="card">
               <div class="card-header bg-transparent border-bottom"><?= (isset($data["codigo"])) ? "Modificar " : "Crear " ?> <?= $subtitle ?></div>
               <div class="card-body">
                  <form method="POST" action="<?=base_url()?>Configuracion/insertar/<?= (isset($data["codigo"])) ? "1" : "0" ?>">
                     <!-- 2 column grid layout with text inputs for the first and last names -->
                     <input type="hidden" id="tableName" name="tableName" value="<?= $tableName ?>">
                     <input type="hidden" id="url" name="url" value="<?= $url ?>">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="form-outline">
                              <label class="form-label" for="codigo">Codigo</label>
                              <input <?= (isset($data["codigo"])) ? "readonly" : "" ?> type="text" id="codigo" name="codigo" class="form-control" value="<?= (isset($data["codigo"])) ? $data["codigo"] : '' ?>"/>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-outline">
                              <label class="form-label" for="descripcion">Descripción</label>
                              <input type="text" id="descripcion" name="descripcion" class="form-control" value="<?= (isset($data["descripcion"])) ? $data["descripcion"] : '' ?>"/>
                           </div>
                        </div>
                        <div class="col-md-2" style="display: flex; justify-content: center; align-items: center;">
                           <button type="submit" class="btn btn-primary btn-block">Guardar</button>
                        </div>
                        
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <table id="tableData" class="table table-bordered table-hover">
                  <thead class="table-light">
                     <tr>
                        <th>Codigo</th>
                        <th>Descripción</th>
                        <th style="text-align: center;">Acciones</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                        if($datos){
                              foreach ($datos as $dato) {
                     ?>
                              <tr>
                                 <td><?= $dato["codigo"] ?></td>
                                 <td><?= $dato["descripcion"] ?></td>
                                 <td style="display: flex; justify-content: center; align-items: center; border: 0"> 
                                    <a href="<?= base_url() ?>Configuracion/listar/<?= $url ?>/<?= $dato["codigo"] ?>" type="button" class="btn btn-warning" style="margin: 0 5px">
                                       <i class="fas fa-pencil-alt"></i>
                              </a>
                                    <form method="POST" action="<?=base_url()?>Configuracion/eliminar">
                                       <input type="hidden" id="idItem" name="idItem" value="<?= $dato['codigo'] ?>">
                                       <input type="hidden" id="tableName" name="tableName" value="<?= $tableName ?>">
                                       <input type="hidden" id="url" name="url" value="<?= $url ?>">
                                       <button type="submit" class="btn btn-danger" style="margin: 0 5px"> 
                                          <i class="fas fa-trash-alt"></i>
                                       </button>
                                    </form>
                                    
                                 </td>
                              </tr>
                     <?php
                              }
                        }
                     ?>
                  </tbody>
            </table>
      </div>
   </div>
   <!-- container-fluid -->
</div>