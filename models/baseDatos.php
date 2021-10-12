<?php

    class BaseDatos{
        //ATRIBUTOS=VARIABLES=DATOS
        public $usuario="root";
        public $passwordBD="";
        public $servidorBD="mysql:host=localhost;";
        public $nombreBD="dbname=tiendabello";



        //METODO ESPECIAL CONSTRUCTOR
        public function __construct(){}

        //METODOS=ACCIONES=FUNCIONES
        public function conectarConBD(){
            try{
                $datosGeneralesBD=$this->servidorBD.$this->nombreBD;
                $conexion=new PDO($datosGeneralesBD,$this->usuario.$this->passwordBD);
                echo("exito de conexion con BD");

            }catch(PDOException $error){
            die("Tenemos un problema " . $error->getMessage());
            }
        }
    }

?>