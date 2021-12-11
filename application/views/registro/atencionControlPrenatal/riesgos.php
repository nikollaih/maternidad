<div class="row align-items-end">
   <div class="col-md-12">
      <div class="card">
         <div class="card-header">NUEVO REGISTRO</div>
         <div class="card-body">
            <form action="" method="post">
               <input type="hidden" name="id_paciente" value="<?= $id_paciente ?>">
                <div class="row">
                    <div class="col-md-4 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="codigo_riesgo">Tipo de riesgo <span class="color-red">*</span></label>
                            <select required class="select form-control" id="codigo_riesgo" name="codigo_riesgo">
                                <option value="">-- Seleccionar</option>
                                <?php
                                    if($tipo_riesgos){
                                        foreach ($tipo_riesgos as $tc) {
                                ?>
                                            <option <?= (isset($data["codigo_riesgo"]) && $data["codigo_riesgo"] == $tc["codigo"]) ? "selected" : "" ?> value="<?= $tc["codigo"] ?>"><?= $tc["descripcion"] ?></option>
                                <?php
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="fum">FUM <span class="color-red">*</span></label>
                            <input required type="text" id="fum" name="fum" class="form-control" value="<?= (isset($data["fum"])) ? $data["fum"] : "" ?>" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="fpp">FPP <span class="color-red">*</span></label>
                            <input required type="text" id="fpp" name="fpp" class="form-control" value="<?= (isset($data["fpp"])) ? $data["fpp"] : "" ?>" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="dias_parto">Días para el parto <span class="color-red">*</span></label>
                            <input required type="number" id="dias_parto" name="dias_parto" class="form-control" value="<?= (isset($data["dias_parto"])) ? $data["dias_parto"] : "" ?>" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="edad_gestacional">Edad gestacional <span class="color-red">*</span></label>
                            <input required type="text" id="edad_gestacional" name="edad_gestacional" class="form-control" value="<?= (isset($data["edad_gestacional"])) ? $data["edad_gestacional"] : "" ?>" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="alarma_parto">Alarma - PARTO <span class="color-red">*</span></label>
                            <input required type="text" id="alarma_parto" name="alarma_parto" class="form-control" value="<?= (isset($data["alarma_parto"])) ? $data["alarma_parto"] : "" ?>" />
                        </div>
                    </div>
                </div>
               <div class="row">
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
                     <td><strong>Tipo de riesgo</strong></td>
                     <td><strong>FUM</strong></td>
                     <td><strong>FPP</strong></td>
                     <td><strong>Días para el parto</strong></td>
                     <td><strong>Edad gestacional</strong></td>
                     <td><strong>Alarma - Parto</strong></td>
                     <td></td>
                  </tr>
               </thead>
               <tbody>
                  <?php
                     if($riesgos){
                        foreach ($riesgos as $riesgo) {
                  ?>
                        <tr>
                           <td><?= $riesgo["riesgo"] ?></td>
                           <td><?= $riesgo["fum"] ?></td>
                           <td><?= $riesgo["fpp"] ?></td>
                           <td><?= $riesgo["dias_parto"] ?></td>
                           <td><?= $riesgo["edad_gestacional"] ?></td>
                           <td><?= $riesgo["alarma_parto"] ?></td>
                           <td class="text-center"><button data-id="<?= $riesgo["id_riesgo"] ?>" class="btn btn-sm btn-danger delete-riesgo">Eliminar</button></td>
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