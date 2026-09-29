<?php

// Functie
function chipCheck($leeftijd, $chipLeeftijd) {
    if ($leeftijd >= $chipLeeftijd) {
        echo "Je mag een chip krijgen!";
    } else {
        echo "De kat is te jong.";
    }
}


var_dump($_POST);


// Zet de leeftijd om naar een integer
if(is_numeric($_POST['leeftijd'])) { 
    $invoer = (int)$_POST['leeftijd'];
} else {
    echo "Ongeldige invoer. Voer een geldig getal in.";
    exit(); // Stop de uitvoering van het script als de invoer ongeldig is
}



chipCheck($invoer, 4);


?>