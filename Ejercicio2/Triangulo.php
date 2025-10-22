<?php 

class Triangulo extends Shape {
    public function calcularArea() : float{
        return ($this->ancho * $this->alto)/2;
}
}
?>