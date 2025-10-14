<?php 
interface Sonido{
    public function hablar();
}
abstract class Animal implements Sonido {
    protected string $nombre;
    public function __construct(string $nombre) {
        $this->nombre = $nombre;
    }
    public function presentacion() : string {
        return "Soy $this->nombre mi sonido caracteristico es: ". $this->hablar()."\n";
    }
}
class Perro extends Animal {
    public function hablar() : string {
        return "Guau guau! Porque soy un perro";
    }
}
class Pato extends Animal {
    public function hablar() : string {
        return "Cuac cuac! porque soy un Pato";
    }
}
class Vaca extends Animal {
    public function hablar() : string {
        return "Muuuu muuu porque soy una vaca";
    }
}
$perro = new Perro("Max");
$pato = new Pato("Donald");
$vaca = new Vaca("Lala");

echo $perro->presentacion();
echo $pato->presentacion();
echo $vaca->presentacion();


?>