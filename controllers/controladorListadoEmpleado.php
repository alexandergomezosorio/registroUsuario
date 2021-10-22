<?php

    // 1 1incluir el modelo de la BD
    // 2 incluir modelo empleado
    include("../models/baseDatos.php");
    include("../models/Empleado.php");

    $empleado = new Empleado(null, null, null, null, null, null);

    $baseDatos = new BaseDatos();
    $empleados = $baseDatos->buscarRegistros($empleado->buscar());

    



?>