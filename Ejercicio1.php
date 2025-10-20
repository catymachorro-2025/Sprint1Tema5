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

