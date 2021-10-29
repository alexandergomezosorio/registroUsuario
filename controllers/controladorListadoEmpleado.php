<?php

    // 1. 1incluir el modelo de la BD
    //  incluir modelo empleado
    include("../models/baseDatos.php");
    include("../models/Empleado.php");
  
    //2. creo un objeto(variable)del modelo empleado
    $empleado = new Empleado(null, null, null, null, null, null);

    //3. ejecutar metodo de buscar registro de la BD
    $baseDatos = new BaseDatos();
    $empleados = $baseDatos->buscarRegistros($empleado->buscar());

   // print_r($empleados);

    



?>