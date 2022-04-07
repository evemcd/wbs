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

sort($obst);
print_r($obst);
echo "<hr>";

rsort($obst);
print_r($obst);
echo "<hr>";

shuffle($obst);
print_r($obst);
echo "<hr>";
?>

</body>
</html>
<!--
Die Funktion sort() sortiert die Werte in einem angegebenen Array alphabetisch aufsteigend.
Mit der Funktion rsort() werden die Werte alphabetisch absteigend sortiert. Und mit shuffle() orndet PHP die Werte in dem Array in zufälliger Reihenfolge neu an. 
-->