<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
</head>
<body>
<h1>PHP</h1>

<?php 

$bn = "Hotte";
$pw = "dubu";

if($bn=="Hotte" && $pw=="bubu"){

	echo "<p>Zugang gewährt, herzlich Willkommen</p>";

}else{
		
	echo "<p>Zugang verweigert</p>";
		
}
?>

</body>
</html>
<!--
Übersichtlicher als die Verschachtelung von if-Abfragen ist vielmehr die Nutzung logischer Operatoren. Das logische UND && verbindet Boolean-Werte, also die Ergebnisse von Vergleichsoperatioen, und liefert selbst einen Boolean zurück. Es gibt true zurück, wenn sowohl auf seiner linken als auch auf seiner rechten Seite ein true Wert steht. Sollte einer der beiden Werte oder gar beide false sein, ist auch das && false im Ergebnis. 
Eine andere Schreibweise wäre AND, wird aber erste später in der Operatoren-Rangfolge ausgeführt.
-->