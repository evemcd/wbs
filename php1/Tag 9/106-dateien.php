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

var_dump($datei);

echo "<hr>";

// Anzahl der Zeichen in der Datei wird ermittelt
$menge = filesize("104-info.txt");

echo $menge."<br>";

// Aus der geöffneten Ressource wid die angegebene Anzahl an Zeichen ausgelesen
echo fread($datei,$menge);

// Die geöffnete Datei wird geschlossen. 
fclose($datei);

?>

</body>
</html>
<!--
Anstelle des sehr einfachen readfile() sollte lieber ein strukturierterer Ansatz verfolgt werden. Dabei wird die einzulesende Datei zunächst mit fopen() als Externe Ressource geöffnet. Hier wird mit r der NUr-Lesen-Modus angegeben. w wäre der Überschreibe-Modus, a der Anhang-Modus. 
Anschliessend kann der Inhalt der Ressource zB mit fread() ausgelesen und zurückgegeben werden. Dabei muss die Anzahl der Zeichen als zweiter Parameter benutzt werden. Will man alle Zeichen ausgeben, kan man diese Zahl mit filesize() ermitteln.
Schließlich sollte eine geöffnete Datei zum Abschluss mit fclose() auch wieder geschlossen werden. 

-->
