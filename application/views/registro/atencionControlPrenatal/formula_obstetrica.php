<div class="card">
   <div class="card-header">NUEVO REGISTRO</div>
   <div class="card-body">
      <form action="" method="post">
         <input type="hidden" name="id_paciente" value="<?= $id_paciente ?>">
         <div class="row align-items-end mb-4">
            <div class="col">
               <div class="form-outline">
                  <label class="form-label" for="gestacion">Gestacion <span class="color-red">*</span></label>
                  <input required type="text" name="gestacion" id="gestacion" class="form-control" />
               </div>
            </div>
            <div class="col">
               <div class="form-outline">
                  <label class="form-label" for="parto">Parto <span class="color-red">*</span></label>
                  <input required type="text" name="parto" id="parto" class="form-control" />
               </div>
            </div>
            <div class="col">
               <div class="form-outline">
                  <label class="form-label" for="cesarea">Cesarea <span class="color-red">*</span></label>
                  <input required type="text" name="cesarea" id="cesarea" class="form-control" />
               </div>
            </div>
         </div>
         <div class="row align-items-end mb-4">
            <div class="col">
               <div class="form-outline">
                  <label class="form-label" for="aborto">Aborto <span class="color-red">*</span></label>
                  <input required type="text" name="aborto" id="aborto" class="form-control" />
               </div>
            </div>
            <div class="col">
               <div class="form-outline">
                  <label class="form-label" for="mortinatos">Mortinatos <span class="color-red">*</span></label>
                  <input required type="text" name="mortinatos" id="mortinatos" class="form-control" />
               </div>
            </div>
            <div class="col">
               <div class="form-outline">
                  <label class="form-label" for="vivos">Vivos <span class="color-red">*</span></label>
                  <input required type="text" name="vivos" id="vivos" class="form-control" />
               </div>
            </div>
            <div class="col">
               <div class="form-outline">
                  <label class="form-label" for="interginesico">Periodo interginesico (flup) <span class="color-red">*</span></label>
                  <input required type="text" name="interginesico" id="interginesico" class="form-control" />
               </div>
            </div>
         </div>
         <div class="row align-items-end">
            <div class="col align-self-end">
               <button class="btn btn-primary">Guardar</button>
            </div>
         </div>
      </form>
   </div>
</div>
<table class="table table-bordered table-hover">
   <thead>
      <tr>
         <td><strong>Gestación</strong></td>
         <td><strong>Parto</strong></td>
         <td><strong>Cesarea</strong></td>
         <td><strong>Aborto</strong></td>
         <td><strong>Mortinatos</strong></td>
         <td><strong>Vivos</strong></td>
         <td><strong>Periodo Interginésico</strong></td>
         <td><strong>Fecha Registro</strong></td>
         <td></td>
      </tr>
   </thead>
   <tbody>
      <?php
         if($formulas){
            foreach ($formulas as $formula) {
      ?>
            <tr>
               <td><?= $formula["gestacion"] ?></td>
               <td><?= $formula["parto"] ?></td>
               <td><?= $formula["cesarea"] ?></td>
               <td><?= $formula["aborto"] ?></td>
               <td><?= $formula["mortinatos"] ?></td>
               <td><?= $formula["vivos"] ?></td>
               <td><?= $formula["interginesico"] ?></td>
               <td><?= date("d M, Y h:i a", strtotime($formula["created_at"])) ?></td>
               <td><button data-id="<?= $formula["id_formula_obstetrica"] ?>" class="btn btn-sm btn-danger delete-formula-obstetrica">Eliminar</button></td>
            </tr>
      <?php
            }
         }
      ?>
   </tbody>
</table>