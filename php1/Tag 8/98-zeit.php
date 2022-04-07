<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - Datum und Uhrzeit</h1>

<?php 

$jetzt = mktime(); //make time

echo $jetzt."<hr>";

$jetzt = mktime(16,30,0,10,31,1022);

echo $jetzt."<hr>";

?>


</body>
</html>
<!--
Auch die Funktion mktime() gibt, wenn sie kein Argument bekommt, den aktuellen Zeitpunkt als Sekundenzahl zurück. 
Aber hier kann man durch entsprechnde Zahlenwerte in den Parameterklammern eine gewünschten Zeitpunkt angeben und erhält die Sekundenzahl, die zu diesem Zeotpunkt vergangen sein wird oder ist. Nimmt man einen Wert vor 1970, bekommt man eine negative Zahl. 
Die Reihenfolge der Werte ist:
Stunde, Minute, Sekunde, Monat, Tag, Jahr
-->