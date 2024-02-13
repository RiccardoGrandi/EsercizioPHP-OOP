<?php 
    function my_autoloader($class) {
        include __DIR__ . '/' . $class . '.php';
    }
    
    spl_autoload_register('my_autoloader');
    

    $lista_alunni = [
        new Alunno("Anatolie", "Pavlov", 20), 
        new Alunno("Riccardo", "Grandi", 19),     
        new Alunno("Alessio", "Didilescu", 18), 
        new Alunno("Alessandro", "Gonzales", 19), 
        new Alunno("Matteo", "Falli", 18), 
        new Alunno("Swaran", "Singh", 20), 
    ];

    echo "<h2>Lista Alunni</h2>";

    foreach ($lista_alunni as $alunno) {
        $alunno->stampaAlunno();
        echo "<br>";
    }

    echo "<h2>Esercizio 1</h2>";
    
    $lista_veicoli = [
        new Veicolo("Fiat", 2019),
        new Automobile("Ford", 2015, "Fiesta")
    ];

    foreach ($lista_veicoli as $veicolo) {
        $veicolo->stampaVeicolo();
        echo "<br>";
    }

    echo "<h2>Esercizio 2</h2>";

    $lista_animali = [
        new Animale(),
        new Cane()
    ];

    foreach ($lista_animali as $animale) {
        $animale->verso();
        echo "<br>";
    }

    echo "<h2>Esercizio 3</h2>";

    $lista_persone = [
        new Persona("Ciccio", "Gamer"),
        new Studente("Riccardo", "Grandi", 7)
    ];

    foreach ($lista_persone as $persona) {
        $persona->presentati();
        echo "<br><br>";
    }
    
?>

