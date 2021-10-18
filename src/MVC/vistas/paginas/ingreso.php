<div class="d-flex justify-content-center text-center py-5">

    <div style="color:white;">
        <form class="p-5 bg-dark" action="" method="post">
            <div class="form-group">
                <label for="email">Correo:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope-open-text"></i></span>
                    </div>
                    <input type="email" class="form-control" placeholder="Ingrese el correo" id="email" name="IngrCorreo">
                </div>
            </div>
            <div class="form-group">
                <label for="pwd">contraseña:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" class="form-control" placeholder="Ingrese la contraseña" id="pwd" name="IngrPass">
                </div>
            </div>
            <?php
            $ingreso = new ControladorFormulario();
            $ingreso->ctrIngreso();
            ?>
            <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>
    </div>
</div>