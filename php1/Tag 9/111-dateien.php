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
$datei = fopen("neuedatei.txt","a");

$disney01 = "Donald Duck\n";

fwrite($datei,$disney01); 

$disney02 = "Daisy Duck\n";

fwrite($datei,$disney02); 

// Die geöffnete Datei wird geschlossen. 
fclose($datei);

?>

</body>
</html>
<!--
Im a Modus von fopen kann man ebenfalls Inhalt in eine Datei schreiben. Hier aber wird der akktuelle Inhalt NICHT überschrieben, hier fügt fwrite() den neuen Inhalt einfach hinter dem schon bestehenden Inhalt ein. 

-->