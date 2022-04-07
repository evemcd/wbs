<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
</head>
<body>
<h1>PHP - Dateien lesen</h1>

<?php 

$datei = fopen("104-info.txt","r");             // öffnet die Datei

echo fgets($datei);                             // liest die erste Zeile
echo "<br>";
echo fgets($datei);                             // liest die nächste Zeile

fclose($datei);                                 // schließt die Datei

?>

</body>
</html>