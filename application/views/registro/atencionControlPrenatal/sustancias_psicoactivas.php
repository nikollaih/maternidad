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
                            <label class="form-label" for="cod-sustancia">Tipo de sustancia que consume</label>
                            <select class="select form-control" id="cod-sustancia" name="cod_sustancia">
                                <option value="">-- Seleccionar</option>
                                <?php
                                    if($tipo_sustancias){
                                        foreach ($tipo_sustancias as $ts) {
                                ?>
                                            <option <?= (isset($data["cod_sustancia"]) && $data["cod_sustancia"] == $ts["codigo"]) ? "selected" : "" ?> value="<?= $ts["codigo"] ?>"><?= $ts["descripcion"] ?></option>
                                <?php
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="cod-frecuencia">Frecuencia</label>
                            <select class="select form-control" id="cod-frecuencia" name="cod_frecuencia">
                                <option value="">-- Seleccionar</option>
                                <?php
                                    if($tipo_frecuencias){
                                        foreach ($tipo_frecuencias as $tf) {
                                ?>
                                            <option <?= (isset($data["cod_frecuencia"]) && $data["cod_frecuencia"] == $tf["codigo"]) ? "selected" : "" ?> value="<?= $tf["codigo"] ?>"><?= $tf["descripcion"] ?></option>
                                <?php
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="ultimo-consumo">Último consumo</label>
                            <input type="date" id="ultimo-consumo" name="fecha_ultimo_consumo" class="form-control" value="<?= (isset($data["fecha_ultimo_consumo"])) ? $data["fecha_ultimo_consumo"] : "" ?>" />
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
                     <td><strong>Tipo de sustancia</strong></td>
                     <td><strong>Frecuencia</strong></td>
                     <td><strong>Ultimo consumo</strong></td>
                     <td><strong>Fecha de creación</strong></td>
                     <td></td>
                  </tr>
               </thead>
               <tbody>
                  <?php
                     if($sustancias){
                        foreach ($sustancias as $sustancia) {
                  ?>
                        <tr>
                           <td><?= $sustancia["sustancia"] ?></td>
                           <td><?= $sustancia["frecuencia"] ?></td>
                           <td><?= date("d M, Y", strtotime($sustancia["fecha_ultimo_consumo"])) ?></td>
                           <td><?= date("d M, Y h:i a", strtotime($sustancia["created_at"])) ?></td>
                           <td class="text-center"><button data-id="<?= $sustancia["id_sustancias_psicoactivas"] ?>" class="btn btn-sm btn-danger delete-sustancia-psicoactiva">Eliminar</button></td>
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