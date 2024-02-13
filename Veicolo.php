<?php

class Veicolo {
    protected $marca;
    protected $anno;

    function __construct($marca, $anno) {
        $this->marca = $marca;
        $this->anno = $anno;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getAnno() {
        return $this->anno;
    }

    public function stampaVeicolo() {
        echo "Marca: " . $this->marca . "<br>";
        echo "Anno: " . $this->anno . "<br>";
    }
}

?>