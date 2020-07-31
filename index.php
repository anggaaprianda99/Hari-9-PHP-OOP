<?php 
require 'animal.php';
require 'ape.php';
require 'frog.php';

$sheep = new Animal("shaun");
echo $sheep->getName();
echo "<br>" .$sheep->legs;
echo $sheep->cold_blooded;
echo "<br>";

$ape = new Ape("Auaaaa");
echo "<br>". $ape->yel();
$frog = new Frog("Hop hop");
echo "<br>". $frog->jump();

?>