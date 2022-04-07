<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP</h1>

<?php 

function summe($a,$b){
	$sum = $a + $b;
	return $sum;
	// Mit dem return endet die Funktion, der Rest wird nicht mehr ausgeführt
	echo "Nein, diesen Text bekommt man nicht zu lesen";
}


echo summe(5,7) * 2;


$x = summe(10,5);
echo "<hr>$x";

?>



</body>
</html>
<!--
Eine Funktion hat meist eine verarbeitende Aufgabe. Häufig wird dann auch in der Funktion festgelegt, was mit dem Ergebnis dieser Arbeit geschehen soll. Manchmal aber soll erst beim Aufrufen festgelegt werden, ob man das Ergebnis der Arbeit in die Seite schreiebt, in einer Variablen speichert oder agr damit noch weiter arbeitet.
Dann wird in der Funktion return eingesetzt. 
Mit return gibt die Funktion den Wert, der hinter dem return steht, als Ergebnis zurück, und zwar an den Punkt, an dem sie aufgerufen wurde. Dort kann dann entschieden werden, was man mit diesem Ergebnis macht.
Mit einem return endet eine Funktion dann auch. Weitere Codezeilen, die nach dem return in der Funktion stehen sollten, werden nicht mehr ausgeführt. 
-->