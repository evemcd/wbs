<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP</h1>

<?php 

$txt = "Hallo Welt";                                            // 10 Zeichen

echo $txt."<br>";

$anz = strlen($txt);

echo "Der String hat $anz Zeichen<hr>";

$txt2 = "                   Hallo Welt                     ";   // 50 Zeichen

echo $txt2."<br>";

$anz = strlen($txt2);

echo "Der 2. String hat $anz Zeichen<hr>";
?>

</body>
</html>
<!--
Kaum ein anderes Element in PHP besitzt so viele Funktionen wie Strings. 
Die erste hier verwendete Funktion ist strlen(). 
Sie gibt die Anzahl der in einem String befindlichen Zeichen zurück. 
Dabei sollte beachtet werden, das in einem String jedes Leerzeichen als einzelnes Zeichen zählt. 
Diese mögen in HTML nicht dargestellt werden, in PHP zählen sie aber mit. 

-->