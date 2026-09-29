<?php

// String replace
$zin = 'Dit is een standaard voorbeeld';
echo str_replace('standaard', 'gewijzigd', $zin);


// Explode (haal deel of alles eruit)
$voorbeeld = 'Dit is een eenvoudig te gebruiken voorbeeld';
$resultaat = explode('eenvoudig', $voorbeeld);

echo '<pre>';
var_dump($resultaat);
echo '</pre>';



// Eerste letter van een string met een hoofdletter
echo ucfirst('dit is een voorbeeld');



// CHeck of het wel een getal is
// is_numeric();


// Basis pagina check
$pagename = basename($_SERVER['PHP_SELF']);

if($pagename != 'PHPfuncties.php') {
    echo 'Dit is niet de juiste pagina';
} else {
    echo 'Dit is de juiste pagina';
}

?>