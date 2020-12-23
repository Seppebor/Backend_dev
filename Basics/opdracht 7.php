<?php
// Maak een scriptje dat voor elke Radiozender (MNM, Radio 1, Radio 2, ...) saved in een variabelen wat de 3 meest gedraaide nummers zijn. 

// Daarna lus je deze uit in volgend formaat: 

// MNM
// 1: Nummer X 
// 2: Nummer Y 
// 3: Nummer Z 
// RADIO 2
// 1: Nummer X
// 2: Nummer Y
// 3: Nummer Z
// ...

$mnm = ["Fever", "Nu Wij Niet Meer Praten","Head & Heart"]; 
$radio1 = ["I Don't Wanna Talk", "Break My Heart", "Feeling Good"]; 
$radio2 = ["When The Sun Goes Down", "Lemonade", "Someone To You"];

$count = 1;

echo "MNM<br>";
for($i = 0;$i < 3;$i++)
{
	echo "$count: $mnm[$i]<br>";
	$count++;
}

$count = 1;

echo "RADIO 1<br>";
for($i = 0;$i < 3;$i++)
{
	echo "$count: $radio1[$i]<br>";
	$count++;
}

$count = 1;

echo "RADIO 2<br>";
for($i = 0;$i < 3;$i++)
{
	echo "$count: $radio2[$i]<br>";
	$count++;
}

?>