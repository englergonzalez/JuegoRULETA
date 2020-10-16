<?php

class UserModel {
    public $ide_use;
    public $log_use;
    public $pas_use;
    public $nom_use;
    public $ape_use;
    public $ema_use;
    public $cel_use;
    public $ced_use;


    public function __construct($ide, $log, $pas, $nom, $ape, $ema, $cel, $ced)  {
        $this->ide_use = $ide;
        $this->log_use = $log;
        $this->pas_use = $pas;
        $this->nom_use = $nom;
        $this->ape_use = $ape;
        $this->ema_use = $ema;
        $this->cel_use = $cel;
        $this->ced_use = $ced;
    }

    public function getIde_use() {
        return ($this->ide_use);
    }
    public function getLog_use() {
        return ($this->log_use);
    }    
    public function getPas_use() {
        return ($this->pas_use);
    }    
    public function getNom_use() {
        return ($this->nom_use);
    }
    public function getApe_use() {
        return ($this->ape_use);
    }
    public function getEma_use(){
        return ($this->ema_use);
    }
    public function getCel_use(){
        return ($this->cel_use);
    }
    public function getCed_use(){
        return ($this->ced_use);
    }  

    public function setIde_use ($ide_use) {
        $this->ide_use = $ide_use;
    }
    public function setLog_use ($log_use) {
        $this->log_use = $log_use;
    }
    public function setPas_use ($pas_use) {
        $this->pas_use = $pas_use;
    }
    public function setNom_use ($nom_use) {
        $this->nom_use = $nom_use;
    }    
    public function setApe_use ($ape_use) {
        $this->ape_use = $ape_use;
    }
    public function setEma_use ($ema_use) {
        $this->ema_use = $ema_use;
    }
    public function setCel_use ($cel_use) {
        $this->cel_use = $cel_use;
    }
    public function setCed_use ($ced_use) {
        $this->ced_use = $ced_use;
    }   
    


}  
?>
