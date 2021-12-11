
<div class="card">
   <div class="card-header">NUEVO REGISTRO</div>
   <div class="card-body">
      <form action="" method="post">
         <input type="hidden" name="id_paciente" value="<?= $id_paciente ?>">
         <div class="row ">
               <div class="col-md-4 col-sm-12 mb-4">
                  <div class="form-outline">
                        <label class="form-label" for="dimension">Dimensión <span class="color-red">*</span></label>
                        <select required class="select form-control" id="dimension" name="dimension">
                           <option value="">-- Seleccionar</option>
                           <?php
                              if($tipo_dimensiones){
                                    foreach ($tipo_dimensiones as $td) {
                           ?>
                                       <option <?= (isset($data["dimension"]) && $data["dimension"] == $ts["codigo"]) ? "selected" : "" ?> value="<?= $td["codigo"] ?>"><?= $td["descripcion"] ?></option>
                           <?php
                                    }
                              }
                           ?>
                        </select>
                  </div>
               </div>
               <div class="col-md-4 col-sm-12 mb-4">
                  <div class="form-outline">
                        <label class="form-label" for="causal">Causales <span class="color-red">*</span></label>
                        <select required class="select form-control" id="causal" name="causal">
                           <option value="">-- Seleccionar</option>
                           <?php
                              if($tipo_causales){
                                    foreach ($tipo_causales as $tc) {
                           ?>
                                       <option <?= (isset($data["causal"]) && $data["causal"] == $ts["codigo"]) ? "selected" : "" ?> value="<?= $tc["codigo"] ?>"><?= $tc["descripcion"] ?></option>
                           <?php
                                    }
                              }
                           ?>
                        </select>
                  </div>
               </div>
               <div class="col-md-4 col-sm-12">
                        <div class="form-outline">
                            <label class="form-label" for="ultimo-consumo">Fecha <span class="color-red">*</span></label>
                            <input required type="date" id="fecha" name="fecha" class="form-control" value="<?= (isset($data["fecha"])) ? $data["fecha"] : "" ?>" />
                        </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="cod-frecuencia">Observaciones <span class="color-red">*</span></label>
                            <textarea required name="observacion" id="observacion" cols="30" rows="5" class="form-control"><?= (isset($data["observacion"])) ? $data["observacion"] : "" ?></textarea>
                        </div>
                    </div>
                </div>
         <div class="row align-items-end">
            <div class="col text-end">
               <button class="btn btn-primary">Guardar</button>
            </div>
         </div>
      </form>
   </div>
</div>
<div class="col-md-12">
   <div class="card">
         <div class="card-header">REGISTROS ANTERIORES</div>
         <div class="card-body">
<table class="table table-bordered table-hover">
   <thead>
      <tr>
         <td><strong>Dimensión</strong></td>
         <td><strong>Causal</strong></td>
         <td><strong>Observaciones</strong></td>
         <td><strong>Fecha</strong></td>
         <td></td>
      </tr>
   </thead>
   <tbody>
      <?php
         if($interrupciones_voluntarias){
            foreach ($interrupciones_voluntarias as $iv) {
      ?>
            <tr>
               <td><?= $iv["dimension"] ?></td>
               <td><?= $iv["causal"] ?></td>
               <td><?= $iv["observacion"] ?></td>
               <td><?= date("d M, Y", strtotime($iv["fecha"])) ?></td>
               <td class="text-center"><button data-id="<?= $iv["id_terminacion_voluntaria"] ?>" class="btn btn-sm btn-danger delete-terminacion-voluntaria">Eliminar</button></td>
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