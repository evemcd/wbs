<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
</head>
<body>
<h1>PHP</h1>

<?php 

$obst = array("Banane","Mandarine","Apfel","Melone","Birne","Zitrone");

print_r($obst);

echo "<hr>";

echo "<ul>";

for($i=0;$i<6;$i++){
	
	echo "<li>$obst[$i]</li>";
	
}

echo "</ul>";
?>

</body>
</html>
<!--
Der fortlaufende Index des Arrays passt perfekt zum Zähler einer for-Schleife. 
Mit dieser Schleife kann man dank des Zählers nun durch jeden einzeln Wert des Arrays schleifen und diesen dann verarbeiten. 
Deshalb ist es wichtig, das die Werte für den Index fortlaufend sind, zumindest in einem Rhythmus, den eine Schleife nutzen kann. 
-->