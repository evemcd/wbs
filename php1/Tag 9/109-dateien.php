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

while(! feof($datei)){
	echo "<p>".fgets($datei)."</p>";
}

// Die geöffnete Datei wird geschlossen. 
fclose($datei);

?>

</body>
</html>
<!--
Mit der Funktion feof() kann man prüfen, ob der interne Pointer/Cursor der Ressouce am Ende des Inhalts steht oder nicht. Solange dieser Pointer noch nicht das Ende erreicht hat, gibt die Funktion false zurück. Aus diesem false macht dann das logische NICHT ! ein true, was dann die while-Schleife dazu bringt, einen weiteren Durchlauf zu machen, also die nächste Zeile auszulesen. Erreicht der Pointer das Ende, gibt feof() ein true zurück, das ! macht daraus ein false und die Schleife endet. 

-->