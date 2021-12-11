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
               <div class="card-header bg-transparent border-bottom">Crear <?= $subtitle ?></div>
               <div class="card-body">
                  <form method="POST" action="<?=base_url()?>Configuracion/insertarParaclinico">
                     <!-- 2 column grid layout with text inputs for the first and last names -->
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-outline">
                              <label class="form-label" for="codigo">Codigo</label>
                              <input type="text" id="codigo" name="codigo" class="form-control" />
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-outline">
                              <label class="form-label" for="descripcion">Descripción</label>
                              <input type="text" id="descripcion" name="descripcion" class="form-control" />
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-4">
                           <div class="form-outline">
                              <label class="form-label" for="minimo">Valor mínimo</label>
                              <input type="text" id="minimo" name="minimo" class="form-control" />
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-outline">
                              <label class="form-label" for="maximo">Valor máximo</label>
                              <input type="text" id="maximo" name="maximo" class="form-control" />
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-outline">
                              <label class="form-label" for="unidad">Unidad de medida</label>
                              <input type="text" id="unidad" name="unidad" class="form-control" />
                           </div>
                        </div>
                     </div>
                     <br>
                     <div class="row align-items-end">
                        <div class="col text-end">
                           <button class="btn btn-primary">Guardar</button>
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
                        <th>Mánimo</th>
                        <th>Máximo</th>
                        <th>Unidad de medida</th>
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
                                 <td><?= $dato["minimo"] ?></td>
                                 <td><?= $dato["maximo"] ?></td>
                                 <td><?= $dato["unidad"] ?></td>
                                 <td style="display: flex; justify-content: center; align-items: center; border: 0"> 
                                    <button type="button" class="btn btn-warning" style="margin: 0 5px">
                                       <i class="fas fa-pencil-alt"></i>
                                    </button>
                                    <form method="POST" action="<?=base_url()?>Configuracion/eliminarParaclinico">
                                       <input type="hidden" id="idItem" name="idItem" value="<?= $dato['codigo'] ?>">
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