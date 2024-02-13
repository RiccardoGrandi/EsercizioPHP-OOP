<?php

class Alunno {
    protected $nome;
    protected $cognome;
    protected $eta;

    function __construct($nome, $cognome, $eta) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCognome() {
        return $this->cognome;
    }

    public function setCognome($cognome) {
        $this->cognome = $cognome;
    }

    public function getEta() {
        return $this->eta;
    }

    public function setEta($eta) {
        $this->eta = $eta;
    }

    public function stampaAlunno() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Cognome: " . $this->cognome . "<br>";
        echo "Età: " . $this->eta . "<br>";
    }

}

?>