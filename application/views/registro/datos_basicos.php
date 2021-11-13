<div class="page-content form-view">
   <div class="container-fluid">
      <div class="row">
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
         <div class="col-md-6">
            <div class="card">
               <div class="card-header">Datos personales</div>
               <div class="card-body">
                  <form>
                     <div class="row mb-4">
                        <div class="col">
                           <div class="form-outline">
                              <label class="form-label" for="form6Example1">Tipo de documento</label>
                              <select class="select form-control">
                                 <option value="1">One</option>
                                 <option value="2">Two</option>
                                 <option value="3">Three</option>
                                 <option value="4">Four</option>
                                 <option value="5">Five</option>
                                 <option value="6">Six</option>
                                 <option value="7">Seven</option>
                                 <option value="8">Eight</option>
                              </select>
                           </div>
                        </div>
                        <div class="col">
                           <div class="form-outline">
                              <label class="form-label" for="form6Example2">Número de documento</label>
                              <input type="text" id="form6Example2" class="form-control" />
                           </div>
                        </div>
                     </div>
                     <!-- 2 column grid layout with text inputs for the first and last names -->
                     <div class="row mb-4">
                        <div class="col">
                           <div class="form-outline">
                              <label class="form-label" for="form6Example1">Nombres</label>
                              <input type="text" id="form6Example1" class="form-control" />
                           </div>
                        </div>
                        <div class="col">
                           <div class="form-outline">
                              <label class="form-label" for="form6Example2">Apellidos</label>
                              <input type="text" id="form6Example2" class="form-control" />
                           </div>
                        </div>
                     </div>
                     <div class="row mb-4">
                        <div class="col">
                           <div class="form-outline">
                              <label class="form-label" for="form6Example1">Sexo</label>
                              <select class="select form-control">
                                 <option value="1">One</option>
                                 <option value="2">Two</option>
                                 <option value="3">Three</option>
                                 <option value="4">Four</option>
                                 <option value="5">Five</option>
                                 <option value="6">Six</option>
                                 <option value="7">Seven</option>
                                 <option value="8">Eight</option>
                              </select>
                           </div>
                        </div>
                        <div class="col">
                           <div class="form-outline">
                              <label class="form-label" for="form6Example1">Genero</label>
                              <select class="select form-control">
                                 <option value="1">One</option>
                                 <option value="2">Two</option>
                                 <option value="3">Three</option>
                                 <option value="4">Four</option>
                                 <option value="5">Five</option>
                                 <option value="6">Six</option>
                                 <option value="7">Seven</option>
                                 <option value="8">Eight</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col">
                           <div class="form-outline">
                              <label class="form-label" for="form6Example1">Fecha de nacimiento</label>
                              <input type="date" id="form6Example3" class="form-control" />
                           </div>
                        </div>
                        <div class="col">
                           <!-- Text input -->
                           <!-- Text input -->
                           <div class="form-outline mb-4">
                              <label class="form-label" for="form6Example3">Edad</label>
                              <input type="text" id="form6Example3" class="form-control" />
                           </div>
                        </div>
                     </div>
                     <div class="row mb-4">
                        <div class="col">
                           <!-- Text input -->
                           <div class="form-outline mb-4">
                              <label class="form-label" for="form6Example4">Telefono</label>
                              <input type="text" id="form6Example4" class="form-control" />
                           </div>
                        </div>
                        <div class="col">
                           <div class="form-outline mb-4">
                              <label class="form-label" for="form6Example5">Email</label>
                              <input type="email" id="form6Example5" class="form-control" />
                           </div>
                        </div>
                     </div>
                     <!-- Email input -->
                     <!-- Checkbox -->
                     <!-- Submit button -->
                     <button type="submit" class="btn btn-primary btn-block mb-4">Continuar</button>
                  </form>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="row">
               <div class="col-md-12">
                  <div class="card">
                     <div class="card-header">Ubicación</div>
                     <div class="card-body">
                        <div class="row mb-4">
                           <div class="col">
                              <div class="form-outline">
                                 <label class="form-label" for="form6Example1">Departamento</label>
                                 <select class="select form-control">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="4">Four</option>
                                    <option value="5">Five</option>
                                    <option value="6">Six</option>
                                    <option value="7">Seven</option>
                                    <option value="8">Eight</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col">
                              <div class="form-outline">
                                 <label class="form-label" for="form6Example1">Municipio</label>
                                 <select class="select form-control">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="4">Four</option>
                                    <option value="5">Five</option>
                                    <option value="6">Six</option>
                                    <option value="7">Seven</option>
                                    <option value="8">Eight</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col">
                              <div class="form-outline">
                                 <label class="form-label" for="form6Example1">Zona</label>
                                 <select class="select form-control">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="4">Four</option>
                                    <option value="5">Five</option>
                                    <option value="6">Six</option>
                                    <option value="7">Seven</option>
                                    <option value="8">Eight</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="card">
                     <div class="card-header">Otros datos</div>
                     <div class="card-body">
                        <div class="row mb-4">
                           <div class="col">
                              <div class="form-outline">
                                 <label class="form-label" for="form6Example1">Tipo de población beneficiaria</label>
                                 <select class="select form-control">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="4">Four</option>
                                    <option value="5">Five</option>
                                    <option value="6">Six</option>
                                    <option value="7">Seven</option>
                                    <option value="8">Eight</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col">
                              <div class="form-outline">
                                 <label class="form-label" for="form6Example1">Discapacidad</label>
                                 <select class="select form-control">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="4">Four</option>
                                    <option value="5">Five</option>
                                    <option value="6">Six</option>
                                    <option value="7">Seven</option>
                                    <option value="8">Eight</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col">
                              <div class="form-outline">
                                 <label class="form-label" for="form6Example1">Étnia</label>
                                 <select class="select form-control">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="4">Four</option>
                                    <option value="5">Five</option>
                                    <option value="6">Six</option>
                                    <option value="7">Seven</option>
                                    <option value="8">Eight</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="row mb-4">
                           <div class="col">
                              <div class="form-outline">
                                 <label class="form-label" for="form6Example1">Nivel educativo</label>
                                 <select class="select form-control">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="4">Four</option>
                                    <option value="5">Five</option>
                                    <option value="6">Six</option>
                                    <option value="7">Seven</option>
                                    <option value="8">Eight</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- container-fluid -->
</div>