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
                            <label class="form-label" for="forma">Forma de Terminación del Embarazo</label>
                            <select class="select form-control" id="forma" name="forma">
                                <option value="">-- Seleccionar</option>
                                <?php
                                    if($formas){
                                        foreach ($formas as $forma) {
                                ?>
                                            <option <?= (isset($data["tipo"]) && $data["tipo"] == $forma["codigo"]) ? "selected" : "" ?> value="<?= $forma["codigo"] ?>"><?= $forma["descripcion"] ?></option>
                                <?php
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="semanas">Semanas</label>
                            <input type="number" id="semanas" name="semanas" class="form-control" value="<?= (isset($data["semanas"])) ? $data["semanas"] : "" ?>" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="fecha_parto">Fecha del parto</label>
                            <input type="date" id="fecha_parto" name="fecha_parto" class="form-control" value="<?= (isset($data["pecha_parto"])) ? $data["pecha_parto"] : "" ?>" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="ips">Ips que atendió el parto(nivel primario, complementario)</label>
                            <select class="select form-control" id="ips" name="ips">
                                <option value="">-- Seleccionar</option>
                                <?php
                                    if($ips){
                                        foreach ($ips as $ip) {
                                ?>
                                            <option <?= (isset($data["tipo"]) && $data["tipo"] == $ip["codigo"]) ? "selected" : "" ?> value="<?= $ip["codigo"] ?>"><?= $ip["descripcion"] ?></option>
                                <?php
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="planificacion">Suministro del método de planificación familiar post evento obstétrico (Antes del alta)</label>
                            <select class="select form-control" id="planificacion" name="planificacion">
                                <option value="">-- Seleccionar</option>
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="observacion">Observaciones</label>
                            <textarea name="observacion" id="observacion" cols="30" rows="5" class="form-control"><?= (isset($data["observacion"])) ? $data["observacion"] : "" ?></textarea>
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
                     <td><strong>Forma de terminación</strong></td>
                     <td><strong>Semanas</strong></td>
                     <td><strong>IPS</strong></td>
                     <td><strong>Suministro del método de planificación familiar</strong></td>
                     <td><strong>Observaciones</strong></td>
                     <td><strong>Fecha del parto</strong></td>
                     <td></td>
                  </tr>
               </thead>
               <tbody>
                  <?php
                     if($partos){
                        foreach ($partos as $parto) {
                  ?>
                        <tr>
                           <td><?= $parto["forma"] ?></td>
                           <td><?= $parto["semanas"] ?></td>
                           <td><?= $parto["ips"] ?></td>
                           <td><?= ($parto["planificacion"] == "1") ? "Si" : "No" ?></td>
                           <td><?= $parto["observacion"] ?></td>
                           <td><?= date("d M, Y", strtotime($parto["fecha_parto"])) ?></td>
                           <td class="text-center"><button data-id="<?= $parto["id_atencion_parto"] ?>" class="btn btn-sm btn-danger delete-atencion-parto">Eliminar</button></td>
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