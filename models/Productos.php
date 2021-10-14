<?php
    class Productos{

     public $nombre;
     public $precio;
     public $categoria;
     public $cantidad;
     public $foto;

     public function __construct($nombreFormulario, $precioFormulario, $categoriaFormulario,
        $cantidadFormulario,$fotoFormulario){
         $this->nombre=$nombreFormulario;
         $this->precio = $precioFormulario;
         $this->categoria = $categoriaFormulario;
         $this->cantidad = $cantidadFormulario;
         $this->foto = $fotoFormulario;
     }
     public function registrar(){
       $consultaSQL= "INSERT INTO productos( nombre, precio, categoria, cantidad, foto)
        VALUES ('$this->nombre','$this->precio','$this->categoria','$this->cantidad','$this->foto')";
        return $consultaSQL;
     }
     public function buscar(){
        $consultaSQL = "SELECT * FROM productos ";
        return $consultaSQL;

     }
     public function eliminar($id){
        $consultaSQL = "DELETE FROM productos WHERE id='$id'";
        return $consultaSQL;

     }
     public function editar($id){
        $consultaSQL = "UPDATE productos SET precio ='$this->precio',cantidad ='$this->cantidad',foto='$this->foto' WHERE id='$id'";
        return $consultaSQL;

     }
         


    }

?>