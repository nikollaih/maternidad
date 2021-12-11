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
                            <label class="form-label" for="fecha_salida_binomio">Fecha salida del binomio madre e hijo <span class="color-red">*</span></label>
                            <input required type="date" id="fecha_salida_binomio" name="fecha_salida_binomio" class="form-control" value="<?= (isset($data["fecha_salida_binomio"])) ? $data["fecha_salida_binomio"] : "" ?>" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="fecha_consejeria_lactancia">Fecha de consejeria en lactancia materna <span class="color-red">*</span></label>
                            <input required type="date" id="fecha_consejeria_lactancia" name="fecha_consejeria_lactancia" class="form-control" value="<?= (isset($data["fecha_consejeria_lactancia"])) ? $data["fecha_consejeria_lactancia"] : "" ?>" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inicio_lactancia_materna">Fecha de incio lactancia materna intraparto <span class="color-red">*</span></label>
                            <input required type="date" id="inicio_lactancia_materna" name="inicio_lactancia_materna" class="form-control" value="<?= (isset($data["inicio_lactancia_materna"])) ? $data["inicio_lactancia_materna"] : "" ?>" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="fecha_atencion_puerperio">Fecha de atencion del puerperio inmediato <span class="color-red">*</span></label>
                            <input required type="date" id="fecha_atencion_puerperio" name="fecha_atencion_puerperio" class="form-control" value="<?= (isset($data["fecha_atencion_puerperio"])) ? $data["fecha_atencion_puerperio"] : "" ?>" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="fecha_consulta_planificacion">Fecha de consulta de planificación familiar post parto <span class="color-red">*</span></label>
                            <input required type="date" id="fecha_consulta_planificacion" name="fecha_consulta_planificacion" class="form-control" value="<?= (isset($data["fecha_consulta_planificacion"])) ? $data["fecha_consulta_planificacion"] : "" ?>" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-4">
                        <label class="form-label" for="tipo">Tipo de planificación <span class="color-red">*</span></label>
                        <select required class="select form-control" id="tipo" name="tipo">
                            <option value="">-- Seleccionar</option>
                            <?php
                                if($tipos_planificacion){
                                    foreach ($tipos_planificacion as $tp) {
                            ?>
                                        <option <?= (isset($data["tipo"]) && $data["tipo"] == $tp["codigo"]) ? "selected" : "" ?> value="<?= $tp["codigo"] ?>"><?= $tp["descripcion"] ?></option>
                            <?php
                                    }
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="observacion">Observaciones <span class="color-red">*</span></label>
                            <textarea required name="observacion" id="observacion" cols="30" rows="5" class="form-control"><?= (isset($data["observacion"])) ? $data["observacion"] : "" ?></textarea>
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
                     <td><strong>F. Salida del binomio madre e hijo</strong></td>
                     <td><strong>F. Consejeria en lactancia materna</strong></td>
                     <td><strong>F. Incio lactancia materna intraparto</strong></td>
                     <td><strong>F. Atencion del puerperio inmediato</strong></td>
                     <td><strong>F. Consulta de planificación familiar post parto</strong></td>
                     <td><strong>Tipo planificación</strong></td>
                     <td><strong>Observaciones</strong></td>
                     <td></td>
                  </tr>
               </thead>
               <tbody>
                  <?php
                     if($controles){
                        foreach ($controles as $control) {
                  ?>
                        <tr>
                            <td><?= date("d M, Y", strtotime($control["fecha_salida_binomio"])) ?></td>
                            <td><?= date("d M, Y", strtotime($control["fecha_consejeria_lactancia"])) ?></td>
                            <td><?= date("d M, Y", strtotime($control["inicio_lactancia_materna"])) ?></td>
                            <td><?= date("d M, Y", strtotime($control["fecha_atencion_puerperio"])) ?></td>
                            <td><?= date("d M, Y", strtotime($control["fecha_consulta_planificacion"])) ?></td>
                           <td><?= $control["planificacion"] ?></td>
                           <td><?= $control["observacion"] ?></td>
                           <td class="text-center"><button data-id="<?= $control["id_control_recien_nacido_madre"] ?>" class="btn btn-sm btn-danger delete-control-recien-nacido-madre">Eliminar</button></td>
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