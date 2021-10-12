<?php
//1incluir el modelo de la BD
//incluir modelo empleado
include("../models/baseDatos.php");
include("../models/Empleado.php");


    if(isset($_POST["boton"])){
        $nombre=$_POST["nombres"];
        $apellidos=$_POST["apellidos"];;
        $email=$_POST["email"];
        $edad=$_POST["edad"];
        $descripcion = $_POST["descripcion"];
        $fotografia=$_POST["foto"];   
        
//3 creo un objeto del modelo empleado (variable)
    $empleado = new Empleado($nombre,$apellidos,$email,$edad,$descripcion,$fotografia);
    
    echo($empleado->registrar());

    $baseDatos = new BaseDatos();
    $baseDatos->conectarConBD();
} else {
    echo ("no deberias estar aquí");
}
   
    

?>