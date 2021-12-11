<div class="row align-items-end">
   <div class="col-md-12">
      <div class="card">
         <div class="card-header">NUEVO REGISTRO</div>
         <div class="card-body">
            <form action="" method="post">
               <input type="hidden" name="id_paciente" value="<?= $id_paciente ?>">
               <div class="row align-items-end mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="prueba_embarazo">Prueba de embarazo <span class="color-red">*</span></label>
                            <select required class="select form-control" id="prueba_embarazo" name="prueba_embarazo">
                                <option value="">-- Seleccionar</option>
                                <option value="1">Positiva</option>
                                <option value="0">Negativa</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="ingreso_tardio">Causa de ingreso tardio <span class="color-red">*</span></label>
                            <select required class="select form-control" id="ingreso_tardio" name="ingreso_tardio">
                                <option value="">-- Seleccionar</option>
                                <?php
                                    if($tipo_tardio){
                                        foreach ($tipo_tardio as $tt) {
                                ?>
                                            <option <?= (isset($data["ingreso_tardio"]) && $data["ingreso_tardio"] == $tt["codigo"]) ? "selected" : "" ?> value="<?= $tt["codigo"] ?>"><?= $tt["descripcion"] ?></option>
                                <?php
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="fecha_ingreso">Fecha ingreso <span class="color-red">*</span></label>
                            <input required type="date" id="fecha_ingreso" name="fecha_ingreso" class="form-control" value="<?= (isset($data["fecha_ingreso"])) ? $data["fecha_ingreso"] : "" ?>" />
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
   </div>


   <div class="col-md-12">
   <div class="card">
         <div class="card-header">REGISTROS ANTERIORES</div>
         <div class="card-body">
            <table class="table table-bordered table-hover">
               <thead>
                  <tr>
                     <td><strong>Prueba de embarazo</strong></td>
                     <td><strong>Causa ingreso tardio</strong></td>
                     <td><strong>Fecha de ingreso</strong></td>
                     <td></td>
                  </tr>
               </thead>
               <tbody>
                  <?php
                     if($controles_prenatal){
                        foreach ($controles_prenatal as $cp) {
                  ?>
                        <tr>
                           <td><?= ($cp["prueba_embarazo"] == "0") ? "Negativa" : "Positiva" ?></td>
                           <td><?= $cp["tardio"] ?></td>
                           <td><?= date("d M, Y", strtotime($cp["fecha_ingreso"])) ?></td>
                           <td class="text-center"><button data-id="<?= $cp["id_control_prenatal"] ?>" class="btn btn-sm btn-danger delete-control-prenatal">Eliminar</button></td>
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