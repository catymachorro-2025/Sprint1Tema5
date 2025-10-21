<?php 
require_once 'Animal.php';
class Vaca extends Animal {
    public function hablar() : string {
        return "Muuuu muuu!";
    }

}

?>