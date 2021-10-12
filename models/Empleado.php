<?php

    class Empleado{

        //VARIABLES=DATOS=ATRIBUTOS
       public  $nombre;
       public  $apellidos;
       public  $email;
       public  $edad;
       public  $descripcion;
       public  $foto;

       public function __construct($nombresFormulario,$apellidosFormulario, $emailFormulario, $edadFormulario, $descripcionFormulario, $fotoFormulario)
       {
           $this->nombres=$nombresFormulario;
           $this->apellidos=$apellidosFormulario;
           $this->email=$emailFormulario;
           $this->edad=$edadFormulario;
           $this->descripcion=$descripcionFormulario;
           $this->foto=$fotoFormulario;
       }

        //ACCIONES=FUNCIONES=METODOS

        public function registrar(){
            $consultaSQL= "INSERT INTO empleados( nombres, apellidos, email, edad, descripcion, foto)
             VALUES ('$this->nombres','$this->apellidos','$this->email','$this->edad','$this->descripcion','$this->foto')";

             return $consultaSQL;
        }
        //create read update delete
        public function buscar(){
            $consultarSQL="select * from empleados";

            return $consultarSQL;
        }
        public function eliminar($id){
            $consultarSQL= "DELETE FROM empleados WHERE id='$id'";
            return $consultarSQL;
        }
        public function editar($id){
            $consultaSQL="UPDATE empleados SET edad='$this->edad',descripcion='$this->descripcion',foto='$this->foto' WHERE id='$id'";
            return $consultaSQL;
        }

   
    }

?>