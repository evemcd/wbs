<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP</h1>

<?php 

$txt = "Hallo Welt";

$txt2 = 'Hallo Welt';


echo $txt;

echo "<br>";

echo $txt2;

?>

</body>
</html>
<!--
PHP nutzt für die Anwendung von Texten den Datentyp String. 
Ein String wird erzeugt, in dem man eine Reihe von Zeichen mit "" oder '' umschliesst. 
Deshalb spricht man auch von einer Zeichenkette.
In PHP unterscheiden sich die beiden Versionen nur darin, das in Strings mit "" Variablen als solche erkannt und interpretiert werden. 
Bei Strings, die mit '' gebildet wurden, werden darin inhaltene Variablen nicht erkannt und nur ihr Bezeichner verwendet.

Ansonsten behandelt PHP beide Varianten gleich, besonders wenn es um die Anwendung von Funktionen auf Strings geht. 
-->