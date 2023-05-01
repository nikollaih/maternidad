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
                            <label class="form-label" for="mes">Mes <span class="color-red">*</span></label>
                            <select class="select form-control" id="mes" name="mes" required>
                                <option value="">-- Seleccionar</option>
                                <?php
                                        for ($i=1; $i < 10; $i++) {
                                            if($i >= 7){
                                                ?>
                                                <option <?= (isset($data["mes"]) && $data["mes"] == $i."-1") ? "selected" : "" ?> value="<?=$i."-1" ?>"><?= $i."-1" ?></option>
                                                <option <?= (isset($data["mes"]) && $data["mes"] == $i."-2") ? "selected" : "" ?> value="<?= $i."-2" ?>"><?= $i."-2" ?></option>
                                    <?php
                                            }
                                            else{
                                                ?>
                                                <option <?= (isset($data["mes"]) && $data["mes"] == $i) ? "selected" : "" ?> value="<?= $i ?>"><?= $i ?></option>
                                    <?php
                                            }
                                        }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="fecha">Fecha <span class="color-red">*</span></label>
                            <input required type="date" id="fecha" name="fecha" class="form-control" value="<?= (isset($data["fecha"])) ? $data["fecha"] : "" ?>" />
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="peso">Peso <span class="color-red">*</span></label>
                            <input required type="number" id="peso" name="peso" class="form-control" value="<?= (isset($data["peso"])) ? $data["peso"] : "" ?>" />
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="fc">FC <span class="color-red">*</span></label>
                            <input required type="text" id="fc" name="fc" class="form-control" value="<?= (isset($data["fc"])) ? $data["fc"] : "" ?>" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="ta">TA <span class="color-red">*</span></label>
                            <input required type="text" id="ta" name="ta" class="form-control" value="<?= (isset($data["ta"])) ? $data["ta"] : "" ?>" />
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="au">AU <span class="color-red">*</span></label>
                            <input required type="text" id="au" name="au" class="form-control" value="<?= (isset($data["au"])) ? $data["au"] : "" ?>" />
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="fcf">FCF <span class="color-red">*</span></label>
                            <input required type="text" id="fcf" name="fcf" class="form-control" value="<?= (isset($data["fcf"])) ? $data["fcf"] : "" ?>" />
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="imc">IMC <span class="color-red">*</span></label>
                            <input required type="text" id="imc" name="imc" class="form-control" value="<?= (isset($data["imc"])) ? $data["imc"] : "" ?>" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="edema_minf">Edema MINF <span class="color-red">*</span></label>
                            <input required type="text" id="edema_minf" name="edema_minf" class="form-control" value="<?= (isset($data["edema_minf"])) ? $data["edema_minf"] : "" ?>" />
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="conciencia">Estado de conciencia <span class="color-red">*</span></label>
                            <select required class="select form-control" id="conciencia" name="conciencia" required>
                                <option value="">-- Seleccionar</option>
                                <?php
                                    if($tipo_estados_conciencia){
                                       foreach ($tipo_estados_conciencia as $tec) {
                                ?>
                                        <option <?= (isset($data["conciencia"]) && $data["conciencia"] == $tec["codigo"]) ? "selected" : "" ?> value="<?= $tec["codigo"] ?>"><?= $tec["descripcion"] ?></option>
                                <?php
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 mb-4">
                        <div class="form-group">
                            <label class="form-label" for="dx">Dx <span class="color-red">*</span></label>
                            <select required class="select form-control searchable-select" id="dx" name="dx" required>
                                <option value="">-- Seleccionar</option>
                                <?php
                                    if($tipo_dx){
                                       foreach ($tipo_dx as $tec) {
                                ?>
                                        <option <?= (isset($data["dx"]) && $data["dx"] == $tec["codigo"]) ? "selected" : "" ?> value="<?= $tec["codigo"] ?>"><?= $tec["descripcion"] ?></option>
                                <?php
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="cod-frecuencia">Observaciones <span class="color-red">*</span></label>
                            <textarea required name="observacion" id="observacion" cols="30" rows="5" class="form-control"><?= (isset($data["observacion"])) ? $data["observacion"] : "" ?></textarea>
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
                           <td><?= $mensual["ec_descripcion"] ?></td>
                           <td><?= $mensual["dx_descripcion"] ?></td>
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