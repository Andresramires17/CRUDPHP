<?php
     require_once "conexion.php";

     class ModelosFormus{

        //registro

        static public function mdlRegistro($tabla, $datos){

        $stmt = conexion::conectar()->prepare("INSERT INTO $tabla(correo,nombre,pwd) VALUES (:correo,:nombre,:pwd)");

        $stmt->bindParam(":correo", $datos["correo"],PDO::PARAM_STR);
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":pwd", $datos["pwd"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            
            return "ok";
        }else{

            print_r(conexion::conectar()->errorInfo());
        }

     }
       

     }

?>