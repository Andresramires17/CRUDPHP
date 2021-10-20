<?php
     require_once "conexion.php";

     class ModeloFormularios{

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

        static public function mldSeleccionRegistro($tabla, $item, $valor){

        if ($item == null && $valor == null) {
            $stmt = conexion::conectar()->prepare(" SELECT ID,correo,nombre,fecha, 
                                                    DATE_FORMAT(fecha,'%Y/%m/%d') AS fecha 
                                                    fROM $tabla 
                                                    ORDER BY ID DESC");
            $stmt->execute();
            //fetchAll(): devolver todos los registros
            //fetch(): devuelve un solo registro
            return $stmt->fetchAll();
        }else {
            $stmt = conexion::conectar()->prepare(" SELECT *,DATE_FORMAT(fecha,'%Y/%m/%d') AS fecha 
                                                    FROM $tabla
                                                    WHERE $item = :$item 
                                                    ORDER BY ID DESC");

            $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);            

            $stmt->execute();
            //fetchAll(): devolver todos los registros
            //fetch(): devuelve un solo registro
            return $stmt->fetch();
        }

        

    }

    static public function mdlActualizarRegistro($tabla, $datos){

        $stmt = conexion::conectar()->prepare(" UPDATE $tabla 
                                                SET nombre=:nombre,correo=:correo,pwd=:pwd
                                                WHERE ID = :id");

        $stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":pwd", $datos["pwd"], PDO::PARAM_STR);
        $stmt->bindParam(":id", $datos["ID"], PDO::PARAM_INT);

        if ($stmt->execute()) {

            return "ok";
        } else {

            print_r(conexion::conectar()->errorInfo());
        }

    }
       

     }

?>