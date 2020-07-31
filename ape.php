<?php 

class Ape extends Animal{
    public function __construct($yel){
        $this->yel = $yel;
    }

    function yel(){
        echo $this->yel;
    }
}
?>