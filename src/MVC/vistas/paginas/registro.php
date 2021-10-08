<?php
$registro = ControladorFormulario::ctrRegistro();

if ($registro == "ok") {
    
    echo '<div class="alert alert-success">Registro completo</div>';
}

?>
<h1>registro</h1>
<form action="" method="post">
    <div class="form-group">
        <label for="email">Correo:</label>
        <input type="email" class="form-control" placeholder="Ingrese el correo" id="email" name="RegCorreo">
    </div>
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" placeholder="Ingrese el correo" id="nombre" name="RegNombre">
    </div>
    <div class="form-group">
        <label for="pwd">contraseña:</label>
        <input type="password" class="form-control" placeholder="Ingrese la contraseña" id="pwd" name="RegPass">
    </div>

    <button type="submit" class="btn btn-primary">Envíar</button>
</form>