<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - Dateien Lesen</h1>

<?php 
// Externe Datei wird im Schreiben-Modus geöffnet
$datei = fopen("neuedatei.txt","w");

$disney01 = "Micky Maus\n";

fwrite($datei,$disney01); 

$disney02 = "Minnie Maus\n";

fwrite($datei,$disney02); 

// Die geöffnete Datei wird geschlossen. 
fclose($datei);

?>

</body>
</html>
<!--
Wenn man eine externe Datei im w-Modus öfnnet, kann der Inhalt dieser Datei überschrieben werden. Gibt man hier eine Text-Datei an, die noch nicht existiert, so erschafft PHP diese Datei neu. Eine bestehende Datei wird einfach geöffnet. 
MIt fwrite schreibt man nun in diese Datei, wobei bereits vorhandener Inhalt überschriebenen wird.
Man kann mit weiteren fwrite()-Anweisungen weiteren Inhalt hinzufügen, solange, bis die Ressource mit fclose() geschlossen wird. 
-->