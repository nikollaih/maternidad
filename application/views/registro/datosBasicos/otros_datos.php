<div class="card">
    <div class="card-header">Otros datos</div>
    <div class="card-body">
        <form action="" method="post">
            <div class="row align-items-end mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="poblacion">Tipo de población beneficiaria</label>
                        <select class="select form-control" id="poblacion" name="poblacion">
                        <?php
                            for ($i=0; $i < count($poblaciones); $i++) { 
                        ?>
                        <option value="<?=$poblaciones[$i]['codigo']?>" <?=( $poblaciones[$i]['codigo'] == $info_paciente[0]['poblacion'] ? 'selected="selected"' : '' )?>>
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
                        <label class="form-label" for="discapacidad">Discapacidad</label>
                        <select class="select form-control" id="discapacidad" name="discapacidad">
                        <?php
                            for ($i=0; $i < count($discapacidades); $i++) { 
                        ?>
                        <option value="<?=$discapacidades[$i]['codigo']?>" <?=( $discapacidades[$i]['codigo'] == $info_paciente[0]['discapacidad'] ? 'selected="selected"' : '' )?>>
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
                        <label class="form-label" for="etnia">Étnia</label>
                        <select class="select form-control" id="etnia" name="etnia">
                        <?php
                            for ($i=0; $i < count($etnias); $i++) { 
                        ?>
                        <option value="<?=$etnias[$i]['codigo']?>" <?=( $etnias[$i]['codigo'] == $info_paciente[0]['etnia'] ? 'selected="selected"' : '' )?>>
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
                        <label class="form-label" for="educacion">Nivel educativo</label>
                        <select class="select form-control" id="educacion" name="educacion">
                        <?php
                            for ($i=0; $i < count($nivelesE); $i++) { 
                        ?>
                        <option value="<?=$nivelesE[$i]['codigo']?>" <?=( $nivelesE[$i]['codigo'] == $info_paciente[0]['educacion'] ? 'selected="selected"' : '' )?>>
                            <?=$nivelesE[$i]['descripcion']?>
                        </option>
                        <?php
                            }
                        ?>
                        </select>
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