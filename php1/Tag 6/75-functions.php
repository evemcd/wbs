<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP</h1>

<?php 
// Kopie übergeben
function ktauschen($a,$b){
	$temp = $a;
	$a = $b;
	$b = $temp;
}

$x = 10;
$y = 20;

echo "Vor Funktion ktauschen: X ist $x, Y ist $y<br>";

ktauschen($x,$y);

echo "Nach Funktion ktauschen: X ist $x, Y ist $y<hr>";


// Referenz übergeben
function rtauschen(&$a,&$b){
	$temp = $a;
	$a = $b;
	$b = $temp;
}

$x = 10;
$y = 20;

echo "Vor Funktion rtauschen: X ist $x, Y ist $y<br>";

rtauschen($x,$y);

echo "Nach Funktion rtauschen: X ist $x, Y ist $y<br>";

?>

</body>
</html>
<!--
Wenn man Variablen als Argumente übergibt, kann man in der Funktionsdefinition entscheiden, ob diese Variablen als Kopien oder aber als Referenzen verwendet werden sollen. Nutzt man normale Parameter in der Funktion, so arbeiten diese immer mit Kopien von übergebenen Variablen. Das bedeutet, einmal kopiert, haben Parameter und Variable keine Verbindung mehr. Wird der Parameter verändert, hat das keinerlei Auswirkungen auf die Variable.

Setzt man beim Definieren der Parameter aber ein & vor den Paramater, arbeitet dieser mit einer Referenz zur übergebenen Variable. Das bedeutet, der Parameter hält Kontakt zur Variablen, und alles, was in der Funktion kit dem Parameter geschieht, geschieht ebenso mit der verbundenen Variablen. 


-->