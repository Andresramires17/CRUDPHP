<?php
     class ControladorFormulario{

        static public function ctrRegistro(){

            if (isset($_POST["RegNombre"])) {
                
                $tabla = "registros";
                
                $datos = array("correo" => $_POST["RegCorreo"],
                                "nombre"=> $_POST["RegNombre"],
                                "pwd" => $_POST["RegPass"] );
                
                $respuesta = ModelosFormus::mdlRegistro($tabla,$datos);

                return $respuesta;
                
            }
        }
     }
?>