<div class="card">
    <div class="card-header">
        Información personal
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="row align-items-end mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example1">Tipo de documento</label>
                    <select class="select form-control">
                        <?php
                            for ($i=0; $i < count($tipo_doc); $i++) { 
                        ?>
                        <option value="<?=$tipo_doc[$i]['codigo']?>"><?=$tipo_doc[$i]['descripcion']?></option>
                        <?php
                            }
                        ?>
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
            <div class="row align-items-end mb-4">
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
            <div class="row align-items-end mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example1">Sexo</label>
                    <select class="select form-control">
                        <?php
                            for ($a=0; $a < count($sexos); $a++) { 
                        ?>
                        <option value="<?=$sexos[$a]['codigo']?>"><?=$sexos[$a]['descripcion']?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example1">Genero</label>
                    <select class="select form-control">
                        <?php
                            for ($a=0; $a < count($generos); $a++) { 
                        ?>
                        <option value="<?=$generos[$a]['codigo']?>"><?=$generos[$a]['descripcion']?></option>
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
                    <label class="form-label" for="form6Example1">Fecha de nacimiento</label>
                    <input type="date" id="form6Example3" class="form-control" />
                </div>
            </div>
            <div class="col">
                <!-- Text input -->
                <!-- Text input -->
                <div class="form-outline">
                    <label class="form-label" for="form6Example3">Edad</label>
                    <input type="number" id="form6Example3" class="form-control" />
                </div>
            </div>
            </div>
            <div class="row align-items-end mb-4">
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
            <div class="row align-items-end">
                <div class="col text-end">
                    <button class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>