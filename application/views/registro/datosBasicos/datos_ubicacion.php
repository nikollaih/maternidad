<div class="card">
    <div class="card-header">
        Información de ubicación
    </div>
    <div class="card-body">
        <form action="" method="post">
            <input type="hidden" value="<?=$id_paciente?>" id="id" name="id">
            <div class="row align-items-end mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="mpio">Municipio</label>
                        <select class="select form-control" id="mpio" name="mpio">
                        <?php
                            for ($i=0; $i < count($mpios); $i++) { 
                        ?>
                            <option value="<?=$mpios[$i]['codigo']?>" <?=( $mpios[$i]['codigo'] == $info_paciente[0]['mpio'] ? 'selected="selected"' : '' )?>>
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
                        <label class="form-label" for="zona">Zona</label>
                        <select class="select form-control" id="zona" name="zona">
                        <?php
                            for ($i=0; $i < count($zonas); $i++) { 
                        ?>
                            <option value="<?=$zonas[$i]['codigo']?>" <?=( $zonas[$i]['codigo'] == $info_paciente[0]['zona'] ? 'selected="selected"' : '' )?>>
                                <?=$zonas[$i]['descripcion']?>
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