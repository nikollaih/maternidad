<div class="card">
   <div class="card-header">NUEVO REGISTRO</div>
   <div class="card-body">
      <form action="" method="post">
         <input type="hidden" name="id_paciente" value="<?= $id_paciente ?>">
         <div class="row">
            <div class="col-md-3 col-sm-12 mb-4">
               <div class="form-outline">
                  <label class="form-label" for="sexo">Sexo <span class="color-red">*</span></label>
                  <select required name="sexo" id="sexo" class="select form-control">
                    <option value="">-- Seleccionar</option>
                    <?php
                        if($tipo_sexo){
                            foreach ($tipo_sexo as $ts) {
                    ?>
                                <option <?= (isset($data["sexo"]) && $data["sexo"] == $ts["codigo"]) ? "selected" : "" ?> value="<?= $ts["codigo"] ?>"><?= $ts["descripcion"] ?></option>
                    <?php
                            }
                        }
                    ?>
                  </select>
               </div>
            </div>
            <div class="col-md-3 col-sm-12 mb-4">
               <div class="form-outline">
                  <label class="form-label" for="peso">Peso <span class="color-red">*</span></label>
                  <input required type="number" id="peso" name="peso" class="form-control" />
               </div>
            </div>
            <div class="col-md-3 col-sm-12 mb-4">
               <div class="form-outline">
                  <label class="form-label" for="talla">Talla <span class="color-red">*</span></label>
                  <input required type="number" id="talla" name="talla" class="form-control" />
               </div>
            </div>
            <div class="col-md-3 col-sm-12 mb-4">
               <div class="form-outline">
                  <label class="form-label" for="vacunas">Vacunas aplicadas al recien nacido(Bcg, hepatitis b) <span class="color-red">*</span></label>
                  <input required type="text" id="vacunas" name="vacunas" class="form-control" />
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-3 col-sm-12 mb-4">
               <div class="form-outline">
                  <label class="form-label" for="abdominal">Perimetro torácico - Perímetro abdominal <span class="color-red">*</span></label>
                  <input required type="text" id="abdominal" name="abdominal" class="form-control" />
               </div>
            </div>
            <div class="col-md-3 col-sm-12 mb-4">
               <div class="form-outline">
                  <label class="form-label" for="pinzamiento">Tiempo pinzamiento del cordon umbilical para h.i.v <span class="color-red">*</span></label>
                  <input required type="text" id="pinzamiento" name="pinzamiento" class="form-control" />
               </div>
            </div>
            <div class="col-md-3 col-sm-12 mb-4">
               <div class="form-outline">
                  <label class="form-label" for="min5">Apagar a los 5 minutos <span class="color-red">*</span></label>
                  <input required type="text" id="min5" name="min5" class="form-control" />
               </div>
            </div>
            <div class="col-md-3 col-sm-12 mb-4">
               <div class="form-outline">
                  <label class="form-label" for="min10">Apagar a los 10 minutos <span class="color-red">*</span></label>
                  <input required type="text" id="min10" name="min10" class="form-control" />
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-3 col-sm-12 mb-4">
               <div class="form-outline">
                  <label class="form-label" for="cefalico">Perimetro cefalico <span class="color-red">*</span></label>
                  <input required type="text" id="cefalico" name="cefalico" class="form-control" />
               </div>
            </div>
            <div class="col-md-3 col-sm-12 mb-4">
               <div class="form-outline">
                  <label class="form-label" for="fec_tsh">Fecha reporte tsh <span class="color-red">*</span></label>
                  <input required type="date" id="fec_tsh" name="fec_tsh" class="form-control" />
               </div>
            </div>
            <div class="col-md-3 col-sm-12 mb-4">
               <div class="form-outline">
                  <label class="form-label" for="rep_tsh">Reporte tsh <span class="color-red">*</span></label>
                  <input required type="text" id="rep_tsh" name="rep_tsh" class="form-control" />
               </div>
            </div>
            <div class="col-md-3 col-sm-12 mb-4">
               <div class="form-outline">
                  <label class="form-label" for="fecha">Fecha control recien nacido <span class="color-red">*</span></label>
                  <input required type="date" id="fecha" name="fecha" class="form-control" />
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
         <div class="row">
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
                  <th><strong>Sexo</strong></th>
                  <th><strong>Peso</strong></th>
                  <th><strong>Talla</strong></th>
                  <th><strong>Vacunas</strong></th>
                  <th><strong>P. Abdominal</strong></th>
                  <th><strong>T. Pinzamiento</strong></th>
                  <th><strong>A. 5 min</strong></th>
                  <th><strong>A. 10 min</strong></th>
                  <th><strong>P. Cefálico</strong></th>
                  <th><strong>Fecha R. TSH</strong></th>
                  <th><strong>R. TSH</strong></th>
                  <th><strong>Fecha control</strong></th>
                  <th><strong>Observaciones</strong></th>
                  <th></th>
               </tr>
            </thead>
            <tbody>
               <?php
                  if($recien_nacido){
                      foreach ($recien_nacido as $rn) {
                  ?>
                <tr>
                    <td><?= $rn["sexo"] ?></td>
                    <td><?= $rn["peso"] ?></td>
                    <td><?= $rn["talla"] ?></td>
                    <td><?= $rn["vacunas"] ?></td>
                    <td><?= $rn["abdominal"] ?></td>
                    <td><?= $rn["pinzamiento"] ?></td>
                    <td><?= $rn["min5"] ?></td>
                    <td><?= $rn["min10"] ?></td>
                    <td><?= $rn["cefalico"] ?></td>
                    <td><?= date("d M, Y", strtotime($rn["fec_tsh"])) ?></td>
                    <td><?= $rn["rep_tsh"] ?></td>
                    <td><?= date("d M, Y", strtotime($rn["fecha"])) ?></td>
                    <td><?= $rn["observacion"] ?></td>
                    <td class="text-center"><button data-id="<?= $rn["id_recien_nacido"] ?>" class="btn btn-sm btn-danger delete-recien-nacido">Eliminar</button></td>
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