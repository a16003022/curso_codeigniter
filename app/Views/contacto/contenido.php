<div class="container">
<h2><?= $titulo_seccion; ?></h2>
<p><?= $descripcion; ?></p>
    <form method="post" action="<?php echo base_url().'/registrar'?>">
        <div class="form-group row col-12">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control"
            placeholder="Ingresa tu nombre completo">
            <label for="direccion">Dirección</label>
            <input type="text" id="direccion" name="direccion" class="form-control"
            placeholder="Ingresa tu direccion">
        </div>
        <div class="form-group row">
            <div class='col-'>
                <label for="correo">Correo</label>
                <input type="mail" id="correo" name="correo" class="form-control"><br>
                <button class="btn btn-success">Registrar</button>
            </div>
        </div>
    </form>
    <div id="contenido_de_la_tabla" class="row">
        <?php //print_r($datos)?>
        <div>
            <div class="col-sm-12">
                <div class="table table-responsive">
                    <table class="table table-hover table-bordered">
                        <tr>
                            <th>Nombre</th>
                            <th>Dirección</th>
                            <th>Correo</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>