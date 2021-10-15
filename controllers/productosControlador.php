<?php
//1incluir el modelo de la BD
//incluir modelo producto
include("../models/baseDatos.php");
include("../models/Productos.php");


    if(isset($_POST["boton"])){
        $nombre=$_POST["nombre"];
        $precio=$_POST["precio"];;
        $categoria=$_POST["categoria"];
        $cantidad=$_POST["cantidad"];
        $fotografia=$_POST["foto"];   
        
//3 creo un objeto del modelo empleado (variable)
    $producto = new Productos($nombre,$precio,$categoria,$cantidad,$foto);
    
    echo($producto->registrar());

    $baseDatos = new BaseDatos();
    $baseDatos->conectarConBD();
} else {
    echo ("no deberias estar aquí");
}
