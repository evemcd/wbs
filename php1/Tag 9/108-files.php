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

for($i=1;$i<=7;$i++) {
    echo "<p>".fgets($datei)."</p>";
}

fclose($datei);                                 // schließt die Datei

?>

</body>
</html>