<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP</h1>

<?php 

$txt = "Hallo liebe Welt. Es ist Dienstag. Machen wir kein Faß darüber auf.";
echo $txt."<br>";

$haeh = strrev($txt);
echo $haeh."<br>";

$haeh = str_shuffle($txt);
echo $haeh."<br>";


?>

</body>
</html>
<!--
Manche Funktionen erscheinen oft auch nicht sehr sinnvoll, man muss dann schon nach sinnvollen Verwendungen suchen. 
Mit strrev() wird die Reihenfolge der Zeichen eines String umgekehrt, mit str_shuffle() kann man die Zeichen in beliebiger Reihenfolge neu anordnen. 
Auch hier bitte Umlaute und Ligatur-Zeichen beachten. 
-->