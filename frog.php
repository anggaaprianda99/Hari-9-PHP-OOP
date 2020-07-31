<?php

class Frog extends Animal{
    public function __construct($jump){
        $this->jump = $jump;
    }

    function jump(){
        echo $this->jump;
    }
}

?>