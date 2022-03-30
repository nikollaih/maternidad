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
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td><strong>Rol</strong></td>
                                <td><strong>Nombre</strong></td>
                                <td><strong>Usuario</strong></td>
                                <td><strong>Email</strong></td>
                                <td><strong>Estado</strong></td>
                                <td><strong>Fecha de creación</strong></td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if($usuarios){
                                    foreach ($usuarios as $usuario) {
                            ?>
                                    <tr>
                                    <td><?= $usuario["rol_name"] ?></td>
                                    <td><?= $usuario["nombre"] ?></td>
                                    <td><?= $usuario["usuario"] ?></td>
                                    <td><?= $usuario["email"] ?></td>
                                    <td><?= ($usuario["estado"] == 1) ? '<label class="badge bg-soft-success text-success">Activo</label>' : '<label class="badge bg-soft-danger text-danger">Inactivo</label>' ?></td>
                                    <td><?= date("d M, Y", strtotime($usuario["created_at"])) ?></td>
                                    <td class="text-center"><a href="<?= base_url() ?>Usuarios/modificar/<?= $usuario["id_usuario"] ?>" class="btn btn-sm btn-warning">Modificar</a></td>
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
   </div>
   <!-- container-fluid -->
</div>