<?php

    // Maak een leeg object aan
    $katten = new stdClass();

    // Vul object met eigenschappen
    $katten->george = new stdClass();
    $katten->george->naam = "George";
    $katten->george->leeftijd = 4;
    $katten->george->kleur = "zwart";
    


    // Condities
    // IF en ELSEIF

    // Als
    if($katten->george->leeftijd > 5) {
        echo "George is een oude kat";

    // Als dan
    } elseif($katten->george->leeftijd === 4 && $katten->george->kleur === "zwart") {
        echo "George is een volwassen zwarte kat van 4 jaar oud";

    // Anders
    } else {
        echo "George is een jonge kat";
    }

    // Waarde van een eigenschap controleren
    if(!isset($katten->george->gewicht)) {
        echo "<br/>George heeft geen gewicht gegevens.";
    }



    // Condities
    // Switch
    switch($katten->george->leeftijd) {
        case 1:
            echo "<br/>George is een kitten";
            break;
        case 2:
            echo "<br/>George is een jonge kat";
            break;
        case 3:
            echo "<br/>George is een volwassen kat";
            break;
        case 4:
            echo "<br/>George is een volwassen kat van 4 jaar oud";
            break;
        default:
            echo "<br/>George is een oude kat";
    }



    // Condities
    // In functie omgeving

    function toonKat($kat) {
        if(is_int($kat->leeftijd)) {  // Check of de leeftijd een integer is

            if($kat->leeftijd > 5) {
                echo "<br/>" . $kat->naam . " is een oude kat";
            } elseif($kat->leeftijd === 4 && $kat->kleur === "zwart") {
                echo "<br/>" . $kat->naam . " is een volwassen zwarte kat van 4 jaar oud";
            } else {
                echo "<br/>" . $kat->naam . " is een jonge kat";
            }

        }
    }

    toonKat($katten->george);
?>