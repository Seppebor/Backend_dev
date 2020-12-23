<?php
// Maak een scriptje waarin een functie verwerkt zit die kan aangeven of iets een even of oneven getal is.
// Maak daarna een array van random getallen (Laat PHP deze getallen genereren). Geef dan voor elk getal aan met behulp van je functie of het even of oneven is.

$x = 6; 

if($x % 2 == 0)
{
	echo "$x is een even getal."; 
}
else 
{
	echo "$x is een oneven getal."; 
}

echo "<br>";
$y = 5; 

if($y % 2 == 0)
{
	echo "$y is een even getal."; 
}
else 
{
	echo "$y is een oneven getal."; 
}
?>