<?php 
require_once 'Animal.php';
class Pato extends Animal {
    public function hablar() : string {
        return "Cuac cuac!";
    }
 
}


?>