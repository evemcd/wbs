<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
</head>
<body>
<h1>PHP</h1>

<?php 

$obst = array("Banane","Mandarine","Apfel","Melone","Birne","Zitrone","Himbeere","Pflaume");

print_r($obst);

echo "<hr>";

$anzahl = count($obst);

$zufall = mt_rand(0,$anzahl-1);

echo "<p>Heute im Angebot: $obst[$zufall]</p>";
?>

</body>
</html>
<!--
Die Indizierung über eine Zahl erlaubt auch andere Einsatzmöglichkeiten. So kann man aus einem Array mit Hilfe der Anzahl der Werte und der Funktion mt_rand() zufällig eine Indexnummer erzeugen, und mit dieser Zufallsnummer dann eben auch zufällig einen Wert aus dem Array auslesen.
-->