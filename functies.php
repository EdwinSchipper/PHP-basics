<?php

// Functie
function toonKat($naam, $leeftijd) {
  echo 'Dit is de kat ' . $naam . ' en die is ' . $leeftijd . ' jaar oud.';
  echo "<br />";
}

// Functie oproepen
toonKat('Simba', 5);
toonKat('Milo', 4);


// Variabelen buiten de functie
$a = 10;
$b = 20;

function optellen($a, $b) {
  return $a + $b;
}

$tijdelijk = optellen($a, $b);
echo $tijdelijk + 3;

?>