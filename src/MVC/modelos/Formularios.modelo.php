<?php
     require_once "conexion.php";

     class ModeloVistaRegistro{

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

    static public function mdlListarRegistro($tabla){

        $stmt = conexion::conectar()->prepare("SELECT correo,nombre,pwd,fecha fROM $tabla");
        $stmt->execute();
        
        //fetchAll(): devolver todos los registros
        //fetch(): devuelve un solo registro
        return $stmt->fetchAll();

    }
       

     }

?>