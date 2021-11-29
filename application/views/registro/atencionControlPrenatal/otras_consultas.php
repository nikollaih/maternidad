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
                            <label class="form-label" for="codigo_consulta">Tipo de consulta</label>
                            <select class="select form-control" id="codigo_consulta" name="codigo_consulta">
                                <option value="">-- Seleccionar</option>
                                <?php
                                    if($tipo_consultas){
                                        foreach ($tipo_consultas as $tc) {
                                ?>
                                            <option <?= (isset($data["codigo_consulta"]) && $data["codigo_consulta"] == $tc["codigo"]) ? "selected" : "" ?> value="<?= $tc["codigo"] ?>"><?= $tc["descripcion"] ?></option>
                                <?php
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="fecha_consulta">Fecha consulta</label>
                            <input type="date" id="fecha_consulta" name="fecha_consulta" class="form-control" value="<?= (isset($data["fecha_consulta"])) ? $data["fecha_consulta"] : "" ?>" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="dx">Dx</label>
                            <input type="text" id="dx" name="dx" class="form-control" value="<?= (isset($data["dx"])) ? $data["dx"] : "" ?>" />
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="cod-frecuencia">Observaciones</label>
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
                     <td><strong>Tipo de consulta</strong></td>
                     <td><strong>Dx</strong></td>
                     <td><strong>Observaciones</strong></td>
                     <td><strong>Fecha</strong></td>
                     <td></td>
                  </tr>
               </thead>
               <tbody>
                  <?php
                     if($otras_consultas){
                        foreach ($otras_consultas as $oc) {
                  ?>
                        <tr>
                           <td><?= $oc["consulta"] ?></td>
                           <td><?= $oc["dx"] ?></td>
                           <td><?= $oc["observacion"] ?></td>
                           <td><?= date("d M, Y", strtotime($oc["fecha_consulta"])) ?></td>
                           <td class="text-center"><button data-id="<?= $oc["id_otras_consultas"] ?>" class="btn btn-sm btn-danger delete-otras-consultas">Eliminar</button></td>
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