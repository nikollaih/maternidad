<div class="row align-items-end">
   <div class="col-md-12">
      <div class="card">
         <div class="card-header">NUEVO REGISTRO</div>
         <div class="card-body">
            <form action="" method="post">
               <input type="hidden" name="id_paciente" value="<?= $id_paciente ?>">
                <h6><b>TRATAMIENTO FARMACOLOGICO</b></h6>
                <div class="custom-form-tab mb-4">
                    <div class="row">
                        <div class="col-md-3 col-sm-12 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="antibiotico">Antibióticos <span class="color-red">*</span></label>
                                <select required class="select form-control" id="antibiotico" name="antibiotico">
                                    <option value="">-- Seleccionar</option>
                                    <option value="1">Si</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="antiretrovirales">Antiretrovirales <span class="color-red">*</span></label>
                                <select required class="select form-control" id="antiretrovirales" name="antiretrovirales">
                                    <option value="">-- Seleccionar</option>
                                    <option value="1">Si</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="remision_ive">Remisión para IVE <span class="color-red">*</span></label>
                                <select required class="select form-control" id="remision_ive" name="remision_ive">
                                    <option value="">-- Seleccionar</option>
                                    <option value="1">Si</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="toma_rapida_vih">Toma rápida de VIH <span class="color-red">*</span></label>
                                <select required class="select form-control" id="toma_rapida_vih" name="toma_rapida_vih">
                                    <option value="">-- Seleccionar</option>
                                    <option value="1">Si</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-3 col-sm-12 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="toma_rapida_hb">Toma rápida de HB <span class="color-red">*</span></label>
                                <select required class="select form-control" id="toma_rapida_hb" name="toma_rapida_hb">
                                    <option value="">-- Seleccionar</option>
                                    <option value="1">Si</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="toma_rapida_hc">Toma rápida de HC <span class="color-red">*</span></label>
                                <select required class="select form-control" id="toma_rapida_hc" name="toma_rapida_hc">
                                    <option value="">-- Seleccionar</option>
                                    <option value="1">Si</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="toma_rapida_sifilis">Toma rápida de SIFILIS <span class="color-red">*</span></label>
                                <select required class="select form-control" id="toma_rapida_sifilis" name="toma_rapida_sifilis">
                                    <option value="">-- Seleccionar</option>
                                    <option value="1">Si</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <h6><b>PROCEDIMIENTO FORENSE </b></h6>
                <div class="custom-form-tab mb-4">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="cadena_de_custodia">Se realiza cadena de custodia  <span class="color-red">*</span></label>
                                <select required class="select form-control" id="cadena_de_custodia" name="cadena_de_custodia">
                                    <option value="">-- Seleccionar</option>
                                    <option value="1">Si</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="derechos_de_victimas">Se nombran los derechos de las victimas  <span class="color-red">*</span></label>
                                <select required class="select form-control" id="derechos_de_victimas" name="derechos_de_victimas">
                                    <option value="">-- Seleccionar</option>
                                    <option value="1">Si</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="ruta_con_entidades_territoriales">Se activa la ruta con las entidades territoriales  <span class="color-red">*</span></label>
                                <select required class="select form-control" id="ruta_con_entidades_territoriales" name="ruta_con_entidades_territoriales">
                                    <option value="">-- Seleccionar</option>
                                    <option value="1">Si</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="notificacion_sivigila">Se notifica en SIVIGILA?  <span class="color-red">*</span></label>
                                <select required class="select form-control" id="notificacion_sivigila" name="notificacion_sivigila">
                                    <option value="">-- Seleccionar</option>
                                    <option value="1">Si</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
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
                     <td><strong>Antibióticos</strong></td>
                     <td><strong>Antiretrovirales</strong></td>
                     <td><strong>Remisión para IVE</strong></td>
                     <td><strong>T.R. de VIH</strong></td>
                     <td><strong>T.R. de HB</strong></td>
                     <td><strong>T.R. de HC</strong></td>
                     <td><strong>T.R. de SIFILIS</strong></td>
                     <td><strong>Cadena de custodia</strong></td>
                     <td><strong>Se nombran los derechos de las victimas</strong></td>
                     <td><strong>Se activa la ruta con las entidades territoriales</strong></td>
                     <td><strong>Se notifica en SIVIGILA</strong></td>
                     <td></td>
                  </tr>
               </thead>
               <tbody>
                  <?php
                     if($violencia_intrafamiliar){
                        foreach ($violencia_intrafamiliar as $vi) {
                  ?>
                        <tr>
                           <td><?= $vi["antibiotico"] ? "<span class='badge badge-success'>Si</span>" : "<span class='badge badge-danger'>No</span>" ?></td>
                           <td><?= $vi["antiretrovirales"] ? "<span class='badge badge-success'>Si</span>" : "<span class='badge badge-danger'>No</span>" ?></td>
                           <td><?= $vi["remision_ive"] ? "<span class='badge badge-success'>Si</span>" : "<span class='badge badge-danger'>No</span>" ?></td>
                           <td><?= $vi["toma_rapida_vih"] ? "<span class='badge badge-success'>Si</span>" : "<span class='badge badge-danger'>No</span>" ?></td>
                           <td><?= $vi["toma_rapida_hb"] ? "<span class='badge badge-success'>Si</span>" : "<span class='badge badge-danger'>No</span>" ?></td>
                           <td><?= $vi["toma_rapida_hc"] ? "<span class='badge badge-success'>Si</span>" : "<span class='badge badge-danger'>No</span>" ?></td>
                           <td><?= $vi["toma_rapida_sifilis"] ? "<span class='badge badge-success'>Si</span>" : "<span class='badge badge-danger'>No</span>" ?></td>
                           <td><?= $vi["cadena_de_custodia"] ? "<span class='badge badge-success'>Si</span>" : "<span class='badge badge-danger'>No</span>" ?></td>
                           <td><?= $vi["derechos_de_victimas"] ? "<span class='badge badge-success'>Si</span>" : "<span class='badge badge-danger'>No</span>" ?></td>
                           <td><?= $vi["ruta_con_entidades_territoriales"] ? "<span class='badge badge-success'>Si</span>" : "<span class='badge badge-danger'>No</span>" ?></td>
                           <td><?= $vi["notificacion_sivigila"] ? "<span class='badge badge-success'>Si</span>" : "<span class='badge badge-danger'>No</span>" ?></td>
                           <td class="text-center"><button data-id="<?= $vi["id_violencia_intrafamiliar"] ?>" class="btn btn-sm btn-danger delete-violencia-intrafamiliar">Eliminar</button></td>
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