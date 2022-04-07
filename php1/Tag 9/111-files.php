<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
</head>
<body>
<h1>PHP - Dateien lesen</h1>

<?php 

$datei = fopen("neuedatei.txt","a");

$disney01 = "Donald Duck\n";
fwrite($datei,$disney01);

$disney02 = "Daisy Duck\n";
fwrite($datei,$disney02);

fclose($datei);

?>

</body>
</html>