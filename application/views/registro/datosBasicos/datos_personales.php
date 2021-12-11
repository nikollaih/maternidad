<div class="card">
    <div class="card-header">
        Información personal
    </div>
    <div class="card-body">
        <form action="" method="post">
            <input type="hidden" value="<?=$id_paciente?>" id="id" name="id">
            <div class="row align-items-end mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="tipodoc">Tipo de documento <span class="color-red">*</span></label>
                    <select required class="select form-control" id="tipodoc" name="tipodoc">
                        <?php
                            for ($i=0; $i < count($tipo_doc); $i++) { 
                        ?>
                        <option value="<?=$tipo_doc[$i]['codigo']?>" <?=( $tipo_doc[$i]['codigo'] == $info_paciente[0]['tipodoc'] ? 'selected="selected"' : '' )?>>
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
                    <input required type="text" id="numero_documento" name="numero_documento" class="form-control" value="<?=$info_paciente[0]['numero_documento']?>"/>
                </div>
            </div>
            </div>
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row align-items-end mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="nombres">Nombres <span class="color-red">*</span></label>
                    <input required type="text" id="nombres" name="nombres" class="form-control" value="<?=$info_paciente[0]['nombres']?>"/>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="apelidos">Apellidos <span class="color-red">*</span></label>
                    <input required type="text" id="apellidos" name="apellidos" class="form-control" value="<?=$info_paciente[0]['apellidos']?>"/>
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
                        <option value="<?=$sexos[$i]['codigo']?>" <?=( $sexos[$i]['codigo'] == $info_paciente[0]['sexo'] ? 'selected="selected"' : '' )?>>
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
                        <option value="<?=$generos[$i]['codigo']?>" <?=( $generos[$i]['codigo'] == $info_paciente[0]['genero'] ? 'selected="selected"' : '' )?>>
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
                    <input required type="date" id="fecha_nac" name="fecha_nac" class="form-control" value="<?=$info_paciente[0]['fecha_nac']?>"/>
                </div>
            </div>
            <div class="col">
                <!-- Text input -->
                <!-- Text input -->
                <div class="form-outline">
                    <label class="form-label" for="telefono">Telefono <span class="color-red">*</span></label>
                    <input required type="number" id="telefono" name="telefono" class="form-control" value="<?=$info_paciente[0]['telefono']?>"/>
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