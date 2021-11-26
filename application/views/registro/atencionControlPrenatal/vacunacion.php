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
                            <label class="form-label" for="cod-vacuna">Vacuna *</label>
                            <select data-class="vacunacion-show-other" class="select form-control select-toggle" id="cod-vacuna" name="cod_vacuna">
                                <option value="">-- Seleccionar</option>
                                <?php
                                    if($tipo_vacunas){
                                        foreach ($tipo_vacunas as $v) {
                                ?>
                                            <option <?= (isset($data["cod_vacuna"]) && $data["cod_vacuna"] == $v["codigo"]) ? "selected" : "" ?> value="<?= $v["codigo"] ?>"><?= $v["descripcion"] ?></option>
                                <?php
                                        }
                                    }
                                ?>
                                <option value="-1">Otra</option>
                            </select>
                        </div>
                    </div>
                    <div class="col vacunacion-show-other d-none">
                        <div class="form-outline">
                            <label class="form-label" for="otra-vacuna">Nombre vacuna</label>
                            <input type="text" id="otra-vacuna" name="otra_vacuna" class="form-control" value="<?= (isset($data["otra_vacuna"])) ? $data["otra_vacuna"] : "" ?>" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="numero-dosis">Dósis # *</label>
                            <input type="number" id="numero-dosis" name="numero_dosis" class="form-control" value="<?= (isset($data["numero_dosis"])) ? $data["numero_dosis"] : "" ?>" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="fecha-vacunacion">Fecha vacunación *</label>
                            <input type="date" id="fecha-vacunacion" name="fecha_vacunacion" class="form-control" value="<?= (isset($data["fecha_vacunacion"])) ? $data["fecha_vacunacion"] : "" ?>" />
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
                     <td><strong>Vacuna</strong></td>
                     <td><strong>Dosis #</strong></td>
                     <td><strong>Fecha vacunacion</strong></td>
                     <td><strong>Fecha de creación</strong></td>
                     <td></td>
                  </tr>
               </thead>
               <tbody>
                  <?php
                     if($vacunas){
                        foreach ($vacunas as $vacuna) {
                  ?>
                        <tr>
                           <td><?= ($vacuna["otra_vacuna"] != "") ? $vacuna["otra_vacuna"] : $vacuna["vacuna"] ?></td>
                           <td><?= $vacuna["numero_dosis"] ?></td>
                           <td><?= date("d M, Y", strtotime($vacuna["fecha_vacunacion"])) ?></td>
                           <td><?= date("d M, Y h:i a", strtotime($vacuna["created_at"])) ?></td>
                           <td class="text-center"><button data-id="<?= $vacuna["id_vacunacion"] ?>" class="btn btn-sm btn-danger delete-vacunacion">Eliminar</button></td>
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