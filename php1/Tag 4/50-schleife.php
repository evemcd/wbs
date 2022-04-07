<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
</head>
<body>
<h1>PHP</h1>

<?php 

$x = 0;

while($x < 20){
	$x+= mt_rand(1,6);
	echo "$x<br>";
}

echo "<p>Maximaler Zufallswert: ".getrandmax()."</p>";

?>

</body>
</html>
<!--
Die while-Schleife unterscheidet sich auch darin von der for-Schleife, das sie mehr auf Sicht fährt.
Die for-Schleife weiss, wenn sie startet, eigentlich schon, wie oft sie läuft. Die while-Schleife entscheidet erst bei jeder Bedingungs-Überprüfung erneut, ob sie noch einen Durchlauf macht oder fertig ist. 
Hier im Beispiel wird zur Demonstration die Funktion mt_rad() verwendet. Diese erzeugt eine zufällige Zahl, wobei man als Parameter den Mindest. und den Maximalwert angeben kann. mt_rand(1,6) erzeugt also eine zufällige Ganzzahl, die mindestens 1 und maximal 6 ist. 
Die Funktion getrandmax() liefert den maximal möglichen Zufallswert.
-->