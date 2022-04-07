<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - Datum und Uhrzeit</h1>

<?php 

$jetzt = time();

echo $jetzt;

$auchjetzt = microtime();

echo "<hr>".$auchjetzt;

$auchjetzt = microtime(true);

echo "<hr>".$auchjetzt;

?>


</body>
</html>
