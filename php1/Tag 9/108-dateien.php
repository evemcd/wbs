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

for($i=1;$i<=7;$i++){
	echo "<p>".fgets($datei)."</p>";
}

// Die geöffnete Datei wird geschlossen. 
fclose($datei);

?>

</body>
</html>
<!--
MIt einer Schleife kann man dann mit fgets alle Zeilen auslesen.
Bei einer for-Schleife müsste man aber wie hier selber angeben, wieviele Durchläufe die Schleife machen soll.
-->
