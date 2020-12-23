<?php
//Maak een scriptje dat een kerstboom kan tonen in de browser met het karakter: *
// dus: 
// *
// **
// ***
// ****
// ...

for($i = 0;$i < 20; $i++)
{
	for($j = 0; $j < $i; $j++)
	{
		echo "*";
	}
	echo "<br>";
}
for($i = 10;$i < 20; $i++)
{
	for($j = 0; $j < $i; $j++)
	{
		echo "*";
	}
	echo "<br>";
}
for($i = 0;$i < 10; $i++)
{
	echo "*****";
	echo "<br>";
}
?>