<?php

    $i = 0;

    // While loop
    while($i < 10) {
        echo $i . "<br>";
        $i++;
    }

    // For loop
    for($i = 0; $i < 10; $i++) {
        echo $i . "<br>";
    }

    // Foreach loop
    $katten = array('George', 'Milo', 'Simba', 'Luna');
    foreach($katten as $kat) {
        echo $kat . "<br>";
    }



    // Leeg dieren object
    $dieren = new stdClass();
    
    // Nieuw object voor elk dier
    $dieren->george = new stdClass();
    $dieren->george->type = 'kat';
    $dieren->george->leeftijd = 3;
    $dieren->george->kleur = 'oranje';

    // Nieuw object voor elk dier
    $dieren->jim = new stdClass();
    $dieren->jim->type = 'hond';
    $dieren->jim->leeftijd = 5;
    $dieren->jim->kleur = 'zwart';

    // Nieuw object voor elk dier
    $dieren->simon = new stdClass();
    $dieren->simon->type = 'vogel';
    $dieren->simon->leeftijd = 2;
    $dieren->simon->kleur = 'groen';


    // Loop door dieren object
    function checkZwarteDieren($dieren){
        $aantalZwarteDieren = 0;
        foreach($dieren as $dier){
            if($dier->kleur == 'zwart'){
                $aantalZwarteDieren++;
            }
        }
        return $aantalZwarteDieren;
    }


    $resultaat = checkZwarteDieren($dieren);
    echo $resultaat;
    
?>