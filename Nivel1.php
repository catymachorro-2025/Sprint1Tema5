<?php 
interface Sonido{
    public function hablar();
}
abstract class Animal implements Sonido {
    protected string $nombre;
    protected string $tipo;
    public function __construct(string $tipo, string $nombre) {
        $this->tipo = $tipo;
        $this->nombre = $nombre;
    }
    public function presentacion() : string {
    
    return "Me llamo $this->nombre, soy un $this->tipo, mi sonido caracteristico es: ". $this->hablar()."\n";
}
}
class Perro extends Animal {
    public function hablar() : string {
        return "Guau guau!";
    }
  
}
class Pato extends Animal {
    public function hablar() : string {
        return "Cuac cuac!";
    }
 
}

class Vaca extends Animal {
    public function hablar() : string {
        return "Muuuu muuu!";
    }

}
$perro = new Perro("perro", "Max");
$pato = new Pato("pato", "Donald");
$vaca = new Vaca("vaca", "Lala");

echo $perro->presentacion();

echo $pato->presentacion();

echo $vaca->presentacion();
?>

<?php 
abstract class Shape {
   protected float $ancho;
   protected float $alto;

   public function __construct($ancho,$alto){
    $this->ancho = $ancho;
    $this->alto = $alto;
   }
abstract public function calcularArea();

}

class Rectangulo extends Shape {
    public function calcularArea() : float {
        return  $this->ancho * $this->alto;
    }
   
    }
class Triangulo extends Shape {
    public function calcularArea() : float{
        return ($this->ancho * $this->alto)/2;
}


}
$rectangulo1 = new Rectangulo(20,15);
$triangulo1 = new Triangulo(12,22);


$areaRectangulo1 = $rectangulo1->calcularArea();
echo "El area del Rectangulo de 20x15 es: ".$areaRectangulo1. "\n";

$areaTriangulo1 = $triangulo1->calcularArea();
echo "El area del triangulo de 12x22 es: ".$areaTriangulo1."\n";


?>