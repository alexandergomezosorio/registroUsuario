<?php

    if (!isset($_SESSION)) {
        session_start();
    }

    include("../models/baseDatos.php");
    include("../models/Empleado.php");

    //2 recibir el id a eliminar
    $id=$_GET["id"];

    // 3 creo un objeto del modelo empleado (variable)
    $empleado = new Empleado(null, null, null, null, null, null);

    //4 ejecutar el metodo insertar registro de la BD
    $baseDatos = new BaseDatos();
    $resultado = $baseDatos->insertarRegistro($empleado->eliminar($id));

     if($resultado){
        
        $_SESSION['mensaje']="exito eliminando el jugador";

        header("Location:../views/registroUsuario.php");
        
    }else{
    echo("ERROR para eliminar jugador");
}





?>