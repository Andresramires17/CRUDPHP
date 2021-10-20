<?php
     class ControladorFormulario{

        //registrar datos
        static public function ctrRegistro(){

            if (isset($_POST["RegNombre"])) {
                
                $tabla = "registros";
                
                $datos = array("correo" => $_POST["RegCorreo"],
                                "nombre"=> $_POST["RegNombre"],
                                "pwd" => $_POST["RegPass"] );
                
                $respuesta = ModeloFormularios::mdlRegistro($tabla,$datos);

                return $respuesta;
                
            }
        }
        //listar datos
        static public function ctrListarRegistro($item,$valor){

            $tabla = "registros";
            $respuesta = ModeloFormularios::mldSeleccionRegistro($tabla,$item,$valor);

            return $respuesta;
        }

        public function ctrIngreso(){
        
             if (isset($_POST["IngrCorreo"]) && isset($_POST["IngrPass"]) ){
            
                $tabla = "registros";   
                $item = "correo";
                $valor = $_POST["IngrCorreo"];
                
                
                $respuesta = ModeloFormularios::mldSeleccionRegistro($tabla,$item,$valor);
                //echo '<pre>'; print_r($respuesta);echo '<pre>';
                if ($respuesta["correo"] == $_POST["IngrCorreo"] && $respuesta["pwd"] == $_POST["IngrPass"]) {

                $_SESSION["ValidarIngreso"] = "ok";

                //borrar caché
                echo    '<script>
            
                        if (window.history.replaceState) {
                            window.history.replaceState(null,null,window.location.href);
                            } 
                            window.location = "index.php?pagina=inicio";
                        </script>';

                

                }else {
                //borrar caché
                echo    '<script>
            
                        if (window.history.replaceState) {
                            window.history.replaceState(null,null,window.location.href);
                            } 
                        </script>';

                echo '<div class="alert alert-danger">Datos inválidos</div>';
                }
             }
        }

        public function ctrActualizarRegistro(){

        if (isset($_POST["updNombre"])) {

            if (isset($_POST["updPass"]) != "") {
                
                $password = $_POST["updPass"];
            }else {
                $password = $_POST["ActualPass"];
            }

            $tabla = "registros";

            $datos = array(
                "ID"        => $_POST["idUsusairo"],
                "correo"    => $_POST["updCorreo"],
                "nombre"    => $_POST["updNombre"],
                "pwd"       => $password
            );

            $respuesta = ModeloFormularios::mdlActualizarRegistro($tabla, $datos);

            if ($respuesta == 'ok') {
                //borrar caché
                echo '<script>
            
                    if (window.history.replaceState) {
                        window.history.replaceState(null,null,window.location.href);
                    } 
                    </script>';

                echo '<div class="alert alert-success">Usuario actualizado</div>';
            }
        }
     }
     
}
