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
                            <label class="form-label" for="tipo">Tipo de paraclinico <span class="color-red">*</span></label>
                            <select required class="select form-control" id="tipo" name="tipo">
                                <option value="">-- Seleccionar</option>
                                <?php
                                    if($tipo_paraclinicos){
                                        foreach ($tipo_paraclinicos as $p) {
                                ?>
                                            <option <?= (isset($data["tipo"]) && $data["tipo"] == $p["codigo"]) ? "selected" : "" ?> value="<?= $p["codigo"] ?>"><?= $p["descripcion"] ?></option>
                                <?php
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="cod-frecuencia">Resultado <span class="color-red">*</span></label>
                            <input required type="text" id="resultado" name="resultado" class="form-control" value="<?= (isset($data["resultado"])) ? $data["resultado"] : "" ?>" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="ultimo-consumo">Fecha <span class="color-red">*</span></label>
                            <input required type="date" id="fecha" name="fecha" class="form-control" value="<?= (isset($data["fecha"])) ? $data["fecha"] : "" ?>" />
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
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
   </div>


   <div class="col-md-12">
   <div class="card">
         <div class="card-header">REGISTROS ANTERIORES</div>
         <div class="card-body">
            <table class="table table-bordered table-hover">
               <thead>
                  <tr>
                     <td><strong>Tipo de paraclinico</strong></td>
                     <td><strong>Minimo</strong></td>
                     <td><strong>Maximo</strong></td>
                     <td><strong>Resultado</strong></td>
                     <td><strong>Observaciones</strong></td>
                     <td><strong>Fecha</strong></td>
                     <td></td>
                  </tr>
               </thead>
               <tbody>
                  <?php
                     if($paraclinicos){
                        foreach ($paraclinicos as $paraclinico) {
                  ?>
                        <tr>
                           <td><?= $paraclinico["paraclinico"] ?></td>
                           <td><?= $paraclinico["minimo"] ?></td>
                           <td><?= $paraclinico["maximo"] ?></td>
                           <td><?= $paraclinico["resultado"] ?></td>
                           <td><?= $paraclinico["observacion"] ?></td>
                           <td><?= date("d M, Y", strtotime($paraclinico["fecha"])) ?></td>
                           <td class="text-center"><button data-id="<?= $paraclinico["id_paraclinicos"] ?>" class="btn btn-sm btn-danger delete-paraclinico">Eliminar</button></td>
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