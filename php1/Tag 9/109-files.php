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

while(! feof($datei)) {                           // feof = file end of (ist die Datei schon am Ende? True or false). nur feof false während nicht am Ende. ! feof = true während nicht am Ende, sodass die while schleife weitermacht
    echo "<p>".fgets($datei)."</p>";
}

fclose($datei);                                 // schließt die Datei

?>

</body>
</html>