<?php 
require 'Sonido.php';
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
//agregue el metodo abstracto de hablar para que lo implementen las clases hijas 
    abstract public function hablar():string;    
}


?>