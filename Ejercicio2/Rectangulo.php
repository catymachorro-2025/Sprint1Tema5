<?php 

class Rectangulo extends Shape {
    public function calcularArea() : float {
        return  $this->ancho * $this->alto;
    }
   
    }
?>