<?php

class Frog extends Animal{
    public $legs = 4;
    
    public function __construct($jump){
        $this->jump = $jump;
    }

    function jump(){
        echo $this->jump;
    }
}

?>