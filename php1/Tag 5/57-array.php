<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
</head>
<body>
<h1>PHP</h1>

<?php 

$obst = array("Banane","Mandarine","Apfel","Melone");
print_r($obst);
echo "<hr>";

echo "Der Wert an der zweiten Position: $obst[1]";
echo "<hr>";

$obst[2] = "Birne";  //ersetzen wenn der Wert schon existiert
print_r($obst);
echo "<hr>";

$obst[4] = "Zitrone";   //neuen Wert zuweisen
print_r($obst);
echo "<hr>";

$obst[20] = "Limette";
print_r($obst);

?>

</body>
</html>
<!--
Die Werte in einem Array werden nummerisch indiziert, d.h. sie bekommen eine Nummer als Schlüssel, damit man sie später wieder in dem Array findet und von dort aus auslesen kann. 
Diese Indexnummer wird beim Erschaffen des Arrays automatisch vergeben und beginnt immer mit 0. Gib tman ein Array mit print_r aus, sieht man diese Nummer auch: [0]=>WertInDemFach
Mit dieser Nummer kann man dann immer wieder auf das Fach zugreifen, man kann den Wert daraus auslesen indem man einfach den Variablen-Namen des Arrays mit eckigen Klammern [] 
dahinter notiert und in die Klammern die Indexnummer setzt. So greift man zB mit $obst[3] auf das vierte Fach in dem Array in der Variable $obst zu. 
Man kann dieses Fach auslesen, man kann diesem Fach aber auch wie einer Variablen einen neuen Wert zuweisen.
Und wenn man beim Zuweisen eines Wertes eine Indexnummer angibt, die in dem Array noch nicht belegt wurde, kann man das Array sogar erweitern. 
Dabei aber sollte darauf geachtet werden, das die Indexnummern forlaufend sind, da sonst eine automatisierte Verarbeitung schwieriger wird. 

-->