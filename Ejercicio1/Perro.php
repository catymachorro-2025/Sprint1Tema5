<?php 
require_once 'Animal.php';
class Perro extends Animal {
    public function hablar() : string {
        return "Guau guau!";
    }
  
}

?>