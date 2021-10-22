<?php

if(!isset($_SESSION)){
    session_start();

}


// 1 1incluir el modelo de la BD
// 2 incluir modelo empleado
include("../models/baseDatos.php");
include("../models/Empleado.php");
include("../views/registroUsuario.php");


    if(isset($_POST["boton"])){
        $nombre=$_POST["nombres"];
        $apellidos=$_POST["apellidos"];;
        $email=$_POST["email"];
        $edad=$_POST["edad"];
        $descripcion = $_POST["descripcion"];
        $fotografia=$_POST["foto"];   
        
// 3 creo un objeto del modelo empleado (variable)
    $empleado = new Empleado($nombre,$apellidos,$email,$edad,$descripcion,$fotografia);
    
    //4 ejecutar el metodo insertar registro de la BD
    $baseDatos=new BaseDatos();
    $resultado=$baseDatos->insertarRegistro($empleado->registrar());

    if($resultado){
        
        $_SESSION['mensaje']="exito en el registro";

        header("Location:../views/registroUsuario.php");
        
    }else
    echo("ERROR para registrar tus datos");

} else {
    echo ("no deberias estar aquí");
}
   
    

?>