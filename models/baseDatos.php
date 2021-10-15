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
                return $conexion;

            }catch(PDOException $error){
            die("Tenemos un problema " . $error->getMessage());
            }
        }
        public function insertarRegistro($consultaSQL){
            //1contruir un puente con la BD
            try{
                $conexion=$this->conectarConBD();

                //2 preparar la BD que recib consulta
                $operacion=$conexion->prepare($consultaSQL);

                //3ejecutar la operacion
                $resutado=$operacion->execute();

                return$resutado;
                
            } catch (PDOException $error) {
                die("Tenemos un problema " . $error->getMessage());
        }
      }
        
    }

?>