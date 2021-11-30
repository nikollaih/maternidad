<div class="page-content form-view">
   <div class="container-fluid">
      <div class="row align-items-end">
         <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
               <h4 class="mb-sm-0 font-size-18"><?= $subtitle ?></h4>
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
                <div class="card">
                    <div class="card-header">Buscar paciente</div>
                    <div class="card-body">
                        <form action="" method="post">
                           <div class="row">
                                 <div class="col-md-10 col-sm-12 mb-4">
                                    <div class="form-outline">
                                       <input type="text" style="font-size: 25px;" id="search" name="search" class="form-control" placeholder="Número de documento, Nombres o Apellidos" />
                                    </div>
                                 </div>
                                 <div class="col-md-2 col-sm-12 mb-4 align-items-middle justify-content-middle text-center">
                                    <div class="form-outline">
                                       <button type="submit" class="btn btn-lg btn-primary">Buscar</button>
                                    </div>
                              </div>
                           </div>
                        </form>
                </div>
            </div>
        </div>

        <?php
         if ($message['success']) {
        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Lista pacientes</div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                           <thead>
                              <th>#</th>
                              <th>Número de documento</th>
                              <th>Nombres</th>
                              <th>Apellidos</th>
                              <th>Fecha de nacimiento</th>
                              <th style="text-align: center">Acciones</th>
                           </thead>
                           <tbody>
                           <?php
                              for ($i=0; $i < count($message['data']) ; $i++) {
                           ?>
                           <tr>
                              <td><?=$i+1;?></td>
                              <td><?=$message['data'][$i]['numero_documento']?></td>
                              <td><?=$message['data'][$i]['nombres']?></td>
                              <td><?=$message['data'][$i]['apellidos']?></td>
                              <td><?=$message['data'][$i]['fecha_nac']?></td>
                              <td style="text-align: center">
                                 <a href="<?=base_url()?>DatosBasicos/personales/<?=$message['data'][$i]['id']?>" class="btn btn-success waves-effect waves-light">
                                    <i class="fas fa-eye"></i>
                                    Ver
                                 </a>
                              </td>
                           </tr>
                           <?php
                              }
                           ?>
                           </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php
         }
        ?>
   </div>
   <!-- container-fluid -->
</div>