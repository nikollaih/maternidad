<div class="row align-items-end">
   <div class="col-md-12">
      <div class="card">
         <div class="card-header">NUEVO REGISTRO</div>
         <div class="card-body">
            <form action="" method="post">
                <input type="hidden" name="id_paciente" value="<?= $id_paciente ?>">
                <div class="row">
                    <div class="col-md-3 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="mes">Mes</label>
                            <select class="select form-control" id="mes" name="mes">
                                <option value="">-- Seleccionar</option>
                                <?php
                                        for ($i=1; $i < 10; $i++) {
                                ?>
                                            <option <?= (isset($data["mes"]) && $data["mes"] == $i) ? "selected" : "" ?> value="<?= $i ?>"><?= $i ?></option>
                                <?php
                                        }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="fecha">Fecha</label>
                            <input type="date" id="fecha" name="fecha" class="form-control" value="<?= (isset($data["fecha"])) ? $data["fecha"] : "" ?>" />
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="peso">Peso</label>
                            <input type="number" id="peso" name="peso" class="form-control" value="<?= (isset($data["peso"])) ? $data["peso"] : "" ?>" />
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="fc">FC</label>
                            <input type="text" id="fc" name="fc" class="form-control" value="<?= (isset($data["fc"])) ? $data["fc"] : "" ?>" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="ta">TA</label>
                            <input type="text" id="ta" name="ta" class="form-control" value="<?= (isset($data["ta"])) ? $data["ta"] : "" ?>" />
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="au">AU</label>
                            <input type="text" id="au" name="au" class="form-control" value="<?= (isset($data["au"])) ? $data["au"] : "" ?>" />
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="fcf">FCF</label>
                            <input type="text" id="fcf" name="fcf" class="form-control" value="<?= (isset($data["fcf"])) ? $data["fcf"] : "" ?>" />
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="imc">IMC</label>
                            <input type="text" id="imc" name="imc" class="form-control" value="<?= (isset($data["imc"])) ? $data["imc"] : "" ?>" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="edema_minf">Edema MINF</label>
                            <input type="text" id="edema_minf" name="edema_minf" class="form-control" value="<?= (isset($data["edema_minf"])) ? $data["edema_minf"] : "" ?>" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="conciencia">Estado de conciencia</label>
                            <input type="text" id="conciencia" name="conciencia" class="form-control" value="<?= (isset($data["conciencia"])) ? $data["fcf"] : "" ?>" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="dx">Dx</label>
                            <input type="text" id="dx" name="dx" class="form-control" value="<?= (isset($data["dx"])) ? $data["dx"] : "" ?>" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="cod-frecuencia">Observaciones</label>
                            <textarea name="observacion" id="observacion" cols="30" rows="5" class="form-control"><?= (isset($data["observacion"])) ? $data["observacion"] : "" ?></textarea>
                        </div>
                    </div>
                </div>
               <div class="row">
                  <div class="col-md-12 text-end">
                     <button class="btn btn-primary">Guardar</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>


   <div class="col-md-12 col-sm-12 mb-4-md-12">
   <div class="card">
         <div class="card-header">REGISTROS ANTERIORES</div>
         <div class="card-body">
            <table class="table table-bordered table-hover">
               <thead>
                  <tr>
                     <td><strong>Mes</strong></td>
                     <td><strong>Peso</strong></td>
                     <td><strong>FC</strong></td>
                     <td><strong>TA</strong></td>
                     <td><strong>AU</strong></td>
                     <td><strong>FCF</strong></td>
                     <td><strong>IMC</strong></td>
                     <td><strong>Edema MINF</strong></td>
                     <td><strong>Est. conciencia</strong></td>
                     <td><strong>Dx</strong></td>
                     <td><strong>Observaciones</strong></td>
                     <td><strong>Fecha</strong></td>
                     <td></td>
                  </tr>
               </thead>
               <tbody>
                  <?php
                     if($mensuales){
                        foreach ($mensuales as $mensual) {
                  ?>
                        <tr>
                           <td><?= $mensual["mes"] ?></td>
                           <td><?= $mensual["peso"] ?></td>
                           <td><?= $mensual["fc"] ?></td>
                           <td><?= $mensual["ta"] ?></td>
                           <td><?= $mensual["au"] ?></td>
                           <td><?= $mensual["fcf"] ?></td>
                           <td><?= $mensual["imc"] ?></td>
                           <td><?= $mensual["edema_minf"] ?></td>
                           <td><?= $mensual["conciencia"] ?></td>
                           <td><?= $mensual["dx"] ?></td>
                           <td><?= $mensual["observacion"] ?></td>
                           <td><?= date("d M, Y", strtotime($mensual["fecha"])) ?></td>
                           <td class="text-center"><button data-id="<?= $mensual["id_mensuales"] ?>" class="btn btn-sm btn-danger delete-control-mensual">Eliminar</button></td>
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