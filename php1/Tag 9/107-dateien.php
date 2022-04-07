<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - Dateien Lesen</h1>

<?php 
// Externe Datei wird im Lese-Modus geöffnet
$datei = fopen("104-info.txt","r");


echo fgets($datei);

echo "<br>";

echo fgets($datei);

// Die geöffnete Datei wird geschlossen. 
fclose($datei);

?>

</body>
</html>
<!--
fgets() kann ebenflass den Inhalt einer Ressource auslesen. Allerdings liest diese Funktion nur Zeilenweise aus. Das bedeutet, fgets gibt bei der ersten Verwendung die erste Zeile des Inhaöts zurück. Hilfreich ist dabei ein Pointer in der Ressource, der auf die erste Zeile weisst. fgets setzt diesen Pointer nach dem Auslesen dann automatisch auf die nächste Zeile. Somit wird bei der zweiten Anwendung von fgets() die zweite Zeile ausgelesen. Das setzt sich dann Zeile für Zeile so fort. 


-->
