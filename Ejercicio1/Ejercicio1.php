<?php 
require_once 'Perro.php';
require_once 'Pato.php';
require_once 'Vaca.php';

$perro = new Perro("perro","Max");
$pato = new Pato("pato","Donald");
$vaca = new Vaca("vaca", "Lala");

echo $perro->presentacion();
echo $pato->presentacion();
echo $vaca->presentacion();


?>