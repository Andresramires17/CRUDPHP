<?php
$registro = ControladorFormulario::ctrRegistro();

if ($registro == "ok") {

    echo '<div class="alert alert-success">Registro completo</div>';
}

?>

<div class="d-flex justify-content-center text-center py-5">
    <form class="p-5 bg-dark" style="color:white" action="" method="post" >

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Ingrese el nombre" id="nombre" name="RegNombre">
            </div>
        </div>
        <div class="form-group">
            <label for="email">Correo:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope-open-text"></i></span>
                </div>
                <input type="email" class="form-control" placeholder="Ingrese el correo" id="email" name="RegCorreo">
            </div>
        </div>
        <div class="form-group">
            <label for="pwd">contraseña:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Ingrese la contraseña" id="pwd" name="RegPass">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Envíar</button>
    </form>
</div>