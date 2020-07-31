<?php

class Animal {
    public $legs = 2;
    public $cold_blooded = "<pre>False</pre>";

    public function __construct($name){
        $this->name = $name;
    }
    function getName(){
        echo $this->name;
    }
}


?>
