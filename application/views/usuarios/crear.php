<div class="page-content form-view">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
               <h4 class="mb-sm-0 font-size-18"><?= $subtitle ?></h4>
               <div class="page-title-right">
                  <ol class="breadcrumb m-0">
                     <li class="breadcrumb-item"><a href="<?= base_url() ?>Usuarios"><?= $title ?></a></li>
                     <li class="breadcrumb-item active"><?= $subtitle ?></li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header bg-transparent border-bottom"><?= $subtitle ?></div>
               <div class="card-body">
                  <form method="POST">
                     <!-- 2 column grid layout with text inputs for the first and last names -->
                     <input type="hidden" id="id_usuario" name="user[id_usuario]" value="<?= $id_usuario ?>">
                     <div class="row">
                        <div class="col-md-12">
                            <?php
                            if($id_usuario){
                            ?>
                            <div class="alert alert-warning ?> alert-dismissible fade show" role="alert">
                                Nota: Si no desea cambiar la contraseña, los campos "Contraseña" y "Repetir Contraseña" deben permanecer vacios.
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-4 mb-4">
                           <div class="form-outline">
                              <label class="form-label" for="rol">Rol <span class="color-red">*</span></label>
                              <select required class="select form-control" id="rol" name="user[rol]">
                                <option value="">-- Seleccionar</option>
                                <?php
                                    if($roles){
                                        foreach ($roles as $rol) {
                                ?>
                                            <option <?= (isset($data["rol"]) && $data["rol"] == $rol["codigo"]) ? "selected" : "" ?> value="<?= $rol["codigo"] ?>"><?= $rol["descripcion"] ?></option>
                                <?php
                                        }
                                    }
                                ?>
                            </select>
                           </div>
                        </div>
                        <div class="col-md-4 mb-4">
                           <div class="form-outline">
                              <label class="form-label" for="usuario">Usuario <span class="color-red">*</span></label>
                              <input required type="text" id="usuario" name="user[usuario]" class="form-control" value="<?= (isset($data["usuario"])) ? $data["usuario"] : "" ?>" />
                           </div>
                        </div>
                        <div class="col-md-4 mb-4">
                           <div class="form-outline">
                              <label class="form-label" for="nombre">Nombre <span class="color-red">*</span></label>
                              <input required type="text" id="usunombreario" name="user[nombre]" class="form-control" value="<?= (isset($data["nombre"])) ? $data["nombre"] : "" ?>"/>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12 mb-4">
                           <div class="form-outline">
                              <label class="form-label" for="email">Email <span class="color-red">*</span></label>
                              <input required type="email" id="email" name="user[email]" class="form-control" value="<?= (isset($data["email"])) ? $data["email"] : "" ?>"/>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-4 mb-4">
                           <div class="form-outline">
                              <label class="form-label" for="password">Contraseña <?= (!$id_usuario) ? '<span class="color-red">*</span>' : '' ?></label>
                              <input <?= (!$id_usuario) ? 'required' : '' ?> minlength="6" type="password" id="password" name="user[password]" class="form-control" value="<?= (isset($data["password"]) && !$id_usuario) ? $data["password"] : "" ?>"/>
                           </div>
                        </div>
                        <div class="col-md-4 mb-4">
                           <div class="form-outline">
                              <label class="form-label" for="r-password">Repetir contraseña <?= (!$id_usuario) ? '<span class="color-red">*</span>' : '' ?></label>
                              <input <?= (!$id_usuario) ? 'required' : '' ?> minlength="6" type="password" id="r-password" name="r-password" class="form-control" />
                           </div>
                        </div>
                        <div class="col-md-4 mb-4">
                           <div class="form-outline">
                              <label class="form-label" for="estado">Estado <span class="color-red">*</span></label>
                              <select required class="select form-control" id="estado" name="user[estado]">
                                <option value="">-- Seleccionar</option>
                                <option <?= (isset($data["estado"]) && $data["estado"] == 1) ? "selected" : "" ?> value="1">Activo</option>
                                <option <?= (isset($data["estado"]) && $data["estado"] == 0) ? "selected" : "" ?> value="0">Inactivo</option>
                            </select>
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
                        </div>
                    </div>
                     <div class="row align-items-end">
                        <div class="col text-end">
                           <button type="submit" class="btn btn-primary btn-block">Guardar</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
   </div>
   <!-- container-fluid -->
</div>