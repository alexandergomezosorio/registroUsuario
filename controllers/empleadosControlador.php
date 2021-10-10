<?php
include("../models/baseDatos.php");


    if(isset($_POST["boton"])){
        $nombre=$_POST["nombres"];
        $apellidos=$_POST["apellidos"];;
        $email=$_POST["email"];
        $edad=$_POST["edad"];
        $fotografia=$_POST["foto"];
        
        echo($nombre." ".$apellidos." ".$email." ".$edad." ".$fotografia);
        $baseDatos = new baseDatos();
        $baseDatos->conectarConBD();
    }else{
        echo("No deberias estar aca");
    }
    
?>