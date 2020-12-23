<?php
// Maar een scriptje dat voor elke student (fictief) bijhoud hoeveel zijn punt op 20 is. 
// Toon het punt van elke student. 
// Sorteer de studenten op basis van hun punt aflopen/oplopend.
// Bereken het klasgemiddelde. (Kan je dit in een functie schrijven?)
// Bereken de mediaan van de klas. (Kan je dit in een functie schrijven?)

$students = ["Seppe" => 14, "Rhomi" => 17, "Sarah" => 13, "Bram" => 8, "Sam" => 5, "Lisa" => 15];

foreach ($students as $key => $value)
{
	echo "Student: $key<br>"; 
	echo "Punten: $value <br><br>";
}

// gesorteerd: punten oplopend
echo "<h2>--------------------</h2><br><br>";

asort($students);

foreach ($students as $key => $value)
{
	echo "Student: $key<br>"; 
	echo "Punten: $value <br><br>";
}

// gesorteerd: punten aflopen
echo "<h2>--------------------</h2><br><br>";

arsort($students);

foreach ($students as $key => $value)
{
	echo "Student: $key<br>"; 
	echo "Punten: $value <br><br>";
}

// Het klasgemiddelde
echo "<h2>--------------------</h2><br>";

$gemiddelde = 0;
$count = 0;

foreach ($students as $key => $value)
{
	$gemiddelde += $value;
	$count++;
}
$gemiddelde /= $count;

echo "Het klasgemiddelde: $gemiddelde<br>";

// De mediaan
echo "<h2>--------------------</h2><br><br>";

$count /= 2;
$count = floor($count);
if($count % 2 == 0)
{
	$nr = 0;
	foreach ($students as $key => $value)
	{
		if($count == $nr)
		{
			echo "De mediaan: $value";
		}
		$nr++;
	}
}
else 
{
	$nr = 0;
	$lowMid; 
	$highMid;
	foreach ($students as $key => $value)
	{
		if($count == $nr)
		{
			$highMid = $value;
		}
		$nr++;
	}
	$count--;
	$nr = 0;
	foreach ($students as $key => $value)
	{
		if($count == $nr)
		{
			$lowMid = $value;
		}
		$nr++;
	}
	echo "De mediaan: ", (($lowMid + $highMid) / 2);
}
?>