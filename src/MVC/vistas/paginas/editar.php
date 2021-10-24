<?php

if (isset($_GET["id"])) {

    $item = "ID";
    $valor = $_GET["id"];

    $usuario = ControladorFormulario::ctrListarRegistro($item, $valor);
    //echo '<pre>';print_r($usuario);echo '<pre>';
}

?>

<div class="d-flex justify-content-center text-center py-5">

    <div style="color:white;">
        <form class="p-5 bg-light" action="" method="post">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                    </div>
                    <input type="text" class="form-control" value="<?php echo $usuario["nombre"]; ?>" id="nombre" name="updNombre">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope-open-text"></i></span>
                    </div>
                    <input type="email" class="form-control" value="<?php echo $usuario["correo"]; ?>" id="email" name="updCorreo">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" class="form-control" placeholder="Actualizar contraseña" id="pwd" name="updPass">
                    <input type="hidden" name="ActualPass" value="<?php echo $usuario["pwd"]; ?>">
                    <input type="hidden" name="idUsusairo" value="<?php echo $usuario["ID"]; ?>">
                </div>
            </div>
            <?php

            $actualizar = ControladorFormulario::ctrActualizarRegistro();

            if ($actualizar == 'ok') {
                //borrar caché
                echo '  <script>
            
                            if (window.history.replaceState) {
                                window.history.replaceState(null,null,window.location.href);
                            } 
                        </script>';

                echo '<div class="alert alert-success">Usuario actualizado</div>
                
                <script>
            
                    setTimeout(function(){

                        window.location = "index.php?pagina=inicio";
                    },1000);
                </script>

                ';
            }
 
            ?>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>