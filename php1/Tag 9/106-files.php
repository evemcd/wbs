<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
</head>
<body>
<h1>PHP - Dateien lesen</h1>

<?php 

$datei = fopen("104-info.txt","r");           // öffnet die Datei

echo "<hr>";

$menge = filesize("104-info.txt");          // liest die Anzahl der Zeichen
echo $menge."<br>";

echo fread($datei,$menge);                  // liest eine bestimmte Datenmenge ($menge)

fclose($datei);                             // schließt die Datei

?>

</body>
</html>