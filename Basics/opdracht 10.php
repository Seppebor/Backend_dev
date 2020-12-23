<?php
// Maak een scriptje dat de gebruiker begroet op basis van het moment van de dag. 

// - In de voormiddag: "Goedemorgen"
// - In de namiddag: "Goedenamiddag"
// - S'avonds: "Goedenavond"
// - S'nachts: "Goedenacht"


date_default_timezone_set("Europe/Brussels");
$hour = date("H");

if($hour >= 23 || $hour < 7)
{
	echo "Goedenacht";
}
else if($hour >= 7 && $hour < 12)
{
	echo "Goedemorgen";
}
else if($hour >= 12 && $hour < 17)
{
	echo "Goedenamiddag";
}
else if($hour >= 17 && $hour < 23)
{
	echo "Goedenavond";
}

?>