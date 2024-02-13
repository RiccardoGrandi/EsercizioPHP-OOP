<?php 
    class Studente extends Persona {
        protected $matricola;
    
        public function __construct($nome, $cognome, $matricola) {
            parent::__construct($nome, $cognome);
            $this->matricola = $matricola;
        }
    
        public function presentati(){     
            echo parent::presentati() . " --- codMatricola -> " . $this->matricola;
        }
    }
    
?>