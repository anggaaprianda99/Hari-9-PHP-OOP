<?php 
require 'animal.php';
require 'ape.php';
require 'frog.php';

$sheep = new Animal();
echo $sheep->getName("Sheep");
echo "<br>" .$sheep->legs;
echo $sheep->cold_blooded;


$frog = new Frog();
echo "<br>". $frog->jump();
$ape = new Ape();
echo "<br>". $ape->yel();
?>