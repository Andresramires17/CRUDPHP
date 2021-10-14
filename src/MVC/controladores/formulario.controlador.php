<?php
     class ControladorFormulario{

        //registrar datos
        static public function ctrRegistro(){

            if (isset($_POST["RegNombre"])) {
                
                $tabla = "registros";
                
                $datos = array("correo" => $_POST["RegCorreo"],
                                "nombre"=> $_POST["RegNombre"],
                                "pwd" => $_POST["RegPass"] );
                
                $respuesta = ModeloVistaRegistro::mdlRegistro($tabla,$datos);

                return $respuesta;
                
            }
        }
        //listar datos
        static public function ctrListarRegistro(){

            $tabla = "registros";
            $respuesta = ModeloVistaRegistro::mdlListarRegistro($tabla);

            return $respuesta;
        }
     }
?>