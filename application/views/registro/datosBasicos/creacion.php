<div class="page-content form-view">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
               <h4 class="mb-sm-0 font-size-18"><?= $title ." - ".$subtitle ?></h4>
               <div class="page-title-right">
                  <ol class="breadcrumb m-0">
                     <li class="breadcrumb-item"><a href="<?= base_url() ?>"><?= $title ?></a></li>
                     <li class="breadcrumb-item active"><?= $subtitle ?></li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <?php
               if(isset($message)){
            ?>
               <div class="alert alert-<?= $message["type"] ?> alert-dismissible fade show" role="alert">
               <?= $message["message"] ?>
               </div>
            <?php
               }
            ?>
            <div>
               <form action="" method="post">
                  <input type="hidden" value="01" id="estado" name="estado">
                  <div class="card">
                     <div class="card-header">
                        Información personal
                     </div>
                     <div class="card-body">
                        <div class="row align-items-end mb-4">
                        <div class="col">
                           <div class="form-outline">
                              <label class="form-label" for="tipodoc">Tipo de documento <span class="color-red">*</span></label>
                              <select required class="select form-control" id="tipodoc" name="tipodoc">
                                    <?php
                                       for ($i=0; $i < count($tipo_doc); $i++) { 
                                    ?>
                                    <option value="<?=$tipo_doc[$i]['codigo']?>">
                                       <?=$tipo_doc[$i]['descripcion']?>
                                    </option>
                                    <?php
                                       }
                                    ?>
                              </select>
                           </div>
                        </div>
                        <div class="col">
                           <div class="form-outline">
                              <label class="form-label" for="numero_documento">Número de documento <span class="color-red">*</span></label>
                              <input required type="text" id="numero_documento" name="numero_documento" class="form-control"/>
                           </div>
                        </div>
                        </div>
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row align-items-end mb-4">
                        <div class="col">
                           <div class="form-outline">
                              <label class="form-label" for="nombres">Nombres <span class="color-red">*</span></label>
                              <input required type="text" id="nombres" name="nombres" class="form-control"/>
                           </div>
                        </div>
                        <div class="col">
                           <div class="form-outline">
                              <label class="form-label" for="apelidos">Apellidos <span class="color-red">*</span></label>
                              <input required type="text" id="apellidos" name="apellidos" class="form-control"/>
                           </div>
                        </div>
                        </div>
                        <div class="row align-items-end mb-4">
                        <div class="col">
                           <div class="form-outline">
                              <label class="form-label" for="sexo">Sexo <span class="color-red">*</span></label>
                              <select required class="select form-control" id="sexo" name="sexo">
                                    <?php
                                       for ($i=0; $i < count($sexos); $i++) { 
                                    ?>
                                    <option value="<?=$sexos[$i]['codigo']?>">
                                       <?=$sexos[$i]['descripcion']?>
                                    </option>
                                    <?php
                                       }
                                    ?>
                              </select>
                           </div>
                        </div>
                        <div class="col">
                           <div class="form-outline">
                              <label class="form-label" for="genero">Genero <span class="color-red">*</span></label>
                              <select required class="select form-control" id="genero" name="genero">
                                    <?php
                                       for ($i=0; $i < count($generos); $i++) { 
                                    ?>
                                    <option value="<?=$generos[$i]['codigo']?>">
                                       <?=$generos[$i]['descripcion']?>
                                    </option>
                                    <?php
                                       }
                                    ?>
                              </select>
                           </div>
                        </div>
                        </div>
                        <div class="row align-items-end mb-4">
                        <div class="col">
                           <div class="form-outline">
                              <label class="form-label" for="fecha_nac">Fecha de nacimiento <span class="color-red">*</span></label>
                              <input required type="date" id="fecha_nac" name="fecha_nac" class="form-control"/>
                           </div>
                        </div>
                        <div class="col">
                           <!-- Text input -->
                           <!-- Text input -->
                           <div class="form-outline">
                              <label class="form-label" for="telefono">Telefono <span class="color-red">*</span></label>
                              <input required type="number" id="telefono" name="telefono" class="form-control"/>
                           </div>
                        </div>
                        </div>
                        
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header">
                        Información de ubicación
                     </div>
                     <div class="card-body">
                        <div class="row align-items-end mb-4">
                           <div class="col">
                              <div class="form-outline">
                                    <label class="form-label" for="mpio">Municipio <span class="color-red">*</span></label>
                                    <select required class="select form-control" id="mpio" name="mpio">
                                    <?php
                                       for ($i=0; $i < count($mpios); $i++) { 
                                    ?>
                                       <option value="<?=$mpios[$i]['codigo']?>">
                                          <?=$mpios[$i]['descripcion']?>
                                       </option>
                                    <?php
                                       }  
                                    ?> 
                                    </select>
                              </div>
                           </div>
                           <div class="col">
                              <div class="form-outline">
                                    <label class="form-label" for="zona">Zona <span class="color-red">*</span></label>
                                    <select required class="select form-control" id="zona" name="zona">
                                    <?php
                                       for ($i=0; $i < count($zonas); $i++) { 
                                    ?>
                                       <option value="<?=$zonas[$i]['codigo']?>">
                                          <?=$zonas[$i]['descripcion']?>
                                       </option>
                                    <?php
                                       }  
                                    ?>
                                    </select>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header">Otros datos</div>
                     <div class="card-body">
                        <div class="row align-items-end mb-4">
                           <div class="col">
                              <div class="form-outline">
                                    <label class="form-label" for="poblacion">Tipo de población beneficiaria <span class="color-red">*</span></label>
                                    <selec  requiredt class="select form-control" id="poblacion" name="poblacion">
                                    <?php
                                       for ($i=0; $i < count($poblaciones); $i++) { 
                                    ?>
                                    <option value="<?=$poblaciones[$i]['codigo']?>">
                                       <?=$poblaciones[$i]['descripcion']?>
                                    </option>
                                    <?php
                                       }
                                    ?>
                                    </select>
                              </div>
                           </div>
                           <div class="col">
                              <div class="form-outline">
                                    <label class="form-label" for="discapacidad">Discapacidad <span class="color-red">*</span></label>
                                    <select required class="select form-control" id="discapacidad" name="discapacidad">
                                    <?php
                                       for ($i=0; $i < count($discapacidades); $i++) { 
                                    ?>
                                    <option value="<?=$discapacidades[$i]['codigo']?>">
                                       <?=$discapacidades[$i]['descripcion']?>
                                    </option>
                                    <?php
                                       }
                                    ?>
                                    </select>
                              </div>
                           </div>
                           <div class="col">
                              <div class="form-outline">
                                    <label class="form-label" for="etnia">Étnia <span class="color-red">*</span></label>
                                    <select required class="select form-control" id="etnia" name="etnia">
                                    <?php
                                       for ($i=0; $i < count($etnias); $i++) { 
                                    ?>
                                    <option value="<?=$etnias[$i]['codigo']?>">
                                       <?=$etnias[$i]['descripcion']?>
                                    </option>
                                    <?php
                                       }
                                    ?>
                                    </select>
                              </div>
                           </div>
                        </div>
                        <div class="row align-items-end mb-4">
                           <div class="col">
                              <div class="form-outline">
                                    <label class="form-label" for="educacion">Nivel educativo <span class="color-red">*</span></label>
                                    <select required class="select form-control" id="educacion" name="educacion">
                                    <?php
                                       for ($i=0; $i < count($nivelesE); $i++) { 
                                    ?>
                                    <option value="<?=$nivelesE[$i]['codigo']?>">
                                       <?=$nivelesE[$i]['descripcion']?>
                                    </option>
                                    <?php
                                       }
                                    ?>
                                    </select>
                              </div>
                           </div>
                           <div class="col">
                              <div class="form-outline">
                                    <label class="form-label" for="eps">Eps <span class="color-red">*</span></label>
                                    <select required class="select form-control" id="eps" name="eps">
                                    <?php
                                       for ($i=0; $i < count($eps); $i++) { 
                                    ?>
                                    <option value="<?=$eps[$i]['codigo']?>">
                                       <?=$eps[$i]['descripcion']?>
                                    </option>
                                    <?php
                                       }
                                    ?>
                                    </select>
                              </div>
                           </div>
                           <div class="col">
                              <div class="form-outline">
                                    <label class="form-label" for="regimen">Régimen <span class="color-red">*</span></label>
                                    <select required class="select form-control" id="regimen" name="regimen">
                                    <?php
                                       for ($i=0; $i < count($regimenes); $i++) { 
                                    ?>
                                    <option value="<?=$regimenes[$i]['codigo']?>">
                                       <?=$regimenes[$i]['descripcion']?>
                                    </option>
                                    <?php
                                       }
                                    ?>
                                    </select>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!---->
                  <div class="row align-items-end">
                     <div class="col text-end">
                        <button class="btn btn-primary">Guardar</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <!-- container-fluid -->
</div>