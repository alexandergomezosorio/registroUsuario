<?php
if (!isset($_SESSION)) {
    session_start();
}
// 1 1incluir el modelo de la BD
// 2 incluir modelo empleado
include("../models/baseDatos.php");
include("../models/Empleado.php");


if (isset($_POST["botonEditar"])) {

    //Recibo datos a editar
    $email = $_POST["email"];

    //recibo el id
    $id = $_GET["id"];
  

    // 3 creo un objeto del modelo empleado (variable)
    $empleado = new Empleado(null, null, $email, null, null, null);

    //4 ejecutar el metodo insertar registro de la BD
    $baseDatos = new BaseDatos();
    $resultado = $baseDatos->insertarRegistro($empleado->editar($id));

    if ($resultado) {

        $_SESSION['mensaje'] = "exito editando el registro";

        header("Location:../views/registroUsuario.php");
    } else
        echo ("ERROR para editar");
} 


?>