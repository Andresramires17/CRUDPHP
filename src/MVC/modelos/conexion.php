<?php
     class conexion{

        static public function conectar(){

            
            //PDO(nombre servidor, nombre db, nombre usuario, contraseña)
            $link = new PDO("mysql:host=localhost;dbname=biblioteca",
                            "root",
                            "");
            $link-> exec("set names utf8");                       

            return $link;
        }
     }
?>