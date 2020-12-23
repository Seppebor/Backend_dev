<?php
// December is begonnen dus het is bijna kerstmis. Maak een scriptje dat weergeeft hoelang het nog is tot kerstmis. 
// Toon dit verschil in: dagen, uren, minuten. 

date_default_timezone_set("Europe/Brussels");
$now = new DateTime();
$future_date = new DateTime('2020-12-25 00:00:00');

$interval = $future_date->diff($now);

echo "Het zijn ", $interval->format("%a dagen %h uren en %i minuten tot Kersmis.");
?>