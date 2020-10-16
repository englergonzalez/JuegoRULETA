<?php

class dineroModel {
    public $dinero;

    public function __construct($dinero)
    {
        $this->dinero = $dinero;
    }

    public function getDinero_use(){
        return ($this->dinero);
    } 

    public function setDinero_use ($dinero) {
        $this->dinero = $dinero;
    }  

}  
?>
