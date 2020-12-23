<?php
// Maak een scriptje dat berekend hoeveel de prijs van iets is zonder de 21% BTW. 
// Documenteer ook wat je hebt gedaan in de code. (Deze lijn doet dit, die doet dat, ...)

// Variabelen aanmaken

$x = 19.99; 
$y = 21; 

// Wat is 21% van de prijs

$btw = $x * ($y / 100); 

// De 21% aftrekken van de prijs

$price = $x - $btw; 

// Tekst op het scherm zetten

echo "The price (inclusive BTW) of this game is $x euro.<br>"; 
echo "The price (exclusive BTW) is $price euro.";
?>