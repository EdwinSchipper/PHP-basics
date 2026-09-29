<?php


  // Variables
  $naam = 'Edwin';  
  $getal = 15;
  $boolean = true;

  echo 'Hallo mijn naam is ' . $naam . ' en ik ben ' . ($boolean ? 'ja' : 'nee') . ' jarig.' . ' en ben ' . $getal . ' jaar oud.';



  // Arrays
  $mijnArray = array('Edwin', 'Jan', 'Piet', 'Klaas');
  $mijnArray[0] = 'Chantal';

  echo '<pre>';
    var_dump($mijnArray);
  echo '</pre>';  

  $mijnGetallen = array(1, 2, 3);
  $totaalSom = $mijnGetallen[0] + $mijnGetallen[1];

  echo "Mijn getallen opgeteld zijn " . $mijnGetallen[0] . " en " . $mijnGetallen[1] . ".";
  echo $totaalSom;


  // Multidimensionale arrays
  $mijnPersoon = array('Edwin', 42, 'Nederlands');

  $mijnPersoon = array(
    0 => array(
      'naam' => 'Edwin',
      'leeftijd' => 42,
    ),
    1 => array(
      'naam' => 'Johan',
      'leeftijd' => 32,
    )
  );

  echo '<br />' . $mijnPersoon[0]['leeftijd'];





  // Object classes
  //NewStandardClass is een standaard class die je kan gebruiken om objecten te maken.
  $katten  = new stdClass();
  
  $katten->spot = new stdClass();
  $katten->spot->voornaam = 'Spot';
  $katten->spot->leeftijd = 42;
  $katten->spot->kleur = 'Zwart';
  $katten->edwin = new stdClass();
  $katten->mandy = new stdClass();

  echo '<pre>';
  var_dump($katten);
  echo '</pre>';

  echo '<br />' . $katten->spot->kleur;

?>