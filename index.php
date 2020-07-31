<?php 
require 'animal.php';
require 'ape.php';
require 'frog.php';

$sheep = new Animal("shaun");

echo $sheep->getName();
echo "<br>" .$sheep->legs;
echo "<br>" .$sheep->cold_blooded;


// $frog = new Frog();
// echo "<br>". $frog->jump();
?>