<?php
//Maak een scriptje dat elk jaartal vanaf 1900 toont in de browser. 

// Als het jaartal een speciaal jaartal is moet er achter het jaartal worden getoond welke gebeurtenis er plaats vond.

//Speciale data: 
// 1914: WOI
// 1940: WOII
// 1989: Berlijnse muur
// 2000: New century

$year = 1900;
do
{
	if($year == 1914)
	{
		echo "$year: WOI <br>";
	}
	else if($year == 1940)
	{
		echo "$year: WOII <br>";
	}
	else if($year == 1989)
	{
		echo "$year: Berlijnse muur <br>";
	}
	else if($year == 2000)
	{
		echo "$year: New century <br>";
	}
	else
	{
		echo "$year<br>";
	}
		
	$year++;	
}
while($year < 2021)
?>