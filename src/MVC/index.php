<?php
     //se muestra la salida de las vistas del usuario
     //acciones que el usuairo envie al controlador
     //require_once: impide la recarga del mismo archivo más de una vez
     //si se recarga el archivo más de una ves de redeclaran variables
require_once "controladores/plantilla.controlador.php";
require_once "controladores/formulario.controlador.php";
require_once "modelos/Formularios.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla->ctrTraerPlantilla();

