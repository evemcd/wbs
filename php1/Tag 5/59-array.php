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

echo "<p>Anzahl der Obstsorten: $anzahl</p>";
echo "<ul>";
for($i=0;$i<$anzahl;$i++){
	echo "<li>$obst[$i]</li>";
}
echo "</ul>";

// Zuweisung mit Hilfe der Werte-Anzahl:

$obst[count($obst)] = "Kiwi";
print_r($obst);
?>

</body>
</html>
<!--
Neben dem fortlaufenden Index ist für die for-Schleife auch die Anzahl der Werte in dem Array wichtig. Denn diese Zahl legt den Zielwert für die Schleifen-Bedingung fest. 
Diesen kann man mit Hilfe einer Funktion auslesen. count() bekommt das Array als Parameter übergeben und gibt eine Zahl, die der Anzahl der Werte in dem Array entspricht zurück. 
Diese zahl wird dann als Zielwert für die Schleife verwendet.
Zusätzlich kann man die Anzahl der Werte auch nutzen, um dem Array genau am Ende einen neuen Wert anzuhängen. 
Denn Die Anzahl ist ja genau um 1 höher als die Indexposition des letzten Wertes. Und entspricht somit auch dem Index des nächsten freien Fachs. 
Das alles gilt ausschließlcih für Arrays, die wirklich fortlaufend indiziert sind!
-->