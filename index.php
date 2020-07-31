<?php 
require 'animal.php';

$sheep = new Animal("shaun");

echo $sheep->getName();
echo "<br>" .$sheep->legs;
echo "<br>" .$sheep->cold_blooded;
?>