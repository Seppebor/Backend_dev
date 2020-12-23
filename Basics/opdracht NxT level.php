<?php

//GO NUTS! 🤩 Probeer met de (beperkte) PHP kennis die je tot nu al hebt een zo creatief mogelijk scriptje te maken met knotsgekke functies enz...
//Probeer een scenario te bedenken dat je kan oplossen door een PHP scriptje te maken. (Liefst meerdere 😉 )

$people = ["Seppe" => 21, "Rhomi" => 22, "Clara" => 23, "Benjamin" => 21, "Hanne" => 24, "Elien" => 24];
date_default_timezone_set("Europe/Brussels");


$nr = 0;
do
{
	$count = 0;
	foreach($people as $name => $age)
	{
		if($count == $nr)
		{
			echo "Hallo, ik ben $name.<br>Ik ben $age jaar oud.<br><br>";
		}
		$count++;
	}
	$nr++;
}while($nr < 6);


$now = new DateTime();
$future_date = new DateTime('2020-12-08 00:00:00');
$interval = $future_date->diff($now);
$count = 0;

foreach($people as $name => $age)
{
	if($count == 0)
	{
		$age++;
		echo $interval->format("$name is jarig 8 december. Over %a dagen en %H uur wordt hij $age jaar.<br><br>");
	}
	$count++;
}

function present($who, $rnd)
{
		if($rnd < 10)
		{
			echo "$who heeft een cadeau voor hem.<br>";
		}
		else 
		{
			echo "$who is vergeten een cadeau te kopen.<br>";
		}
}

foreach($people as $name => $age)
{
	$nr = rand(0, 20);
	present($name, $nr);
}

$goedDoel = ["Unicef", "WWF"];
function goedDoel($nr1, $nr2)
{
	$nr1 += $nr2; 
	echo "<br>Seppe heeft voor zijn verjaardag $nr1 euro ingezameld voor een goed doel.<br>";

	echo "Hij geeft $nr2 van zijn ingezameld geld aan Unicef ";
	$nr1 -= $nr2;
	echo "en de overige $nr1 euro aan WWF.<br>";	
}

$nr1 = rand(20, 70);
$nr2 = rand(20, 70);

goedDoel($nr1, $nr2);
?>