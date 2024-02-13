<?php

class Automobile extends Veicolo {
    private $modello;
    
    public function __construct($marca, $anno, $modello) {
        parent::__construct($marca, $anno);
        $this->modello = $modello;
    }
    
    public function getModello() {
        return $this->modello;
    }

    public function stampaVeicolo() {
        echo parent::stampaVeicolo() . "Modello: " . $this->modello . "<br>";
    }
}

?>