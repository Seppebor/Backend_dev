<?php
// Maak een scriptje waar je een random zin in een variabele zet. De random zin mag hardcoded in de variabele worden gezet.

//Van deze zin haal je op: 
// - Hoe lang hij is
// - Of het woord "NxT" er in voorkomt.
// - Of het woord "Fuck" er in voorkomt. Het woord vervang je door "****" voor je de string naar de browser stuurt. 

$text = "Fuck yeah, ik zit in mijn 2de jaar van NxT Media Technologie!"; 

//Hoe lang hij is 

echo $text; 
echo "<br><br>Number of characters in string: ";
echo strlen($text); 

// Komt het woord "NxT" voor? 

$NxT = "NxT"; 
echo "<br>Komt het 'NxT' voor? zo ja, pos: "; 
echo strpos($text, $NxT);

// Komt het woord "Fuck" voor? zo ja, vervang het door "****"

echo "<br>verbeterde zin: ";
echo str_replace('Fuck', '****', $text);
?>