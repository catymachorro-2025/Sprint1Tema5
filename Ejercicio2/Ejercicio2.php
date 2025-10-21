<?php 

require 'Shape.php';
require 'Rectangulo.php';
require 'Triangulo.php';


$rectangulo1 = new Rectangulo(20,15);
$triangulo1 = new Triangulo(12,22);

$areaRectangulo1 = $rectangulo1->calcularArea();
echo "El area del Rectangulo de 20x15 es: ".$areaRectangulo1. "\n";

$areaTriangulo1 = $triangulo1->calcularArea();
echo "El area del triangulo de 12x22 es: ".$areaTriangulo1."\n";

?>
