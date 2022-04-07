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

setlocale(LC_ALL,"de");

echo strftime("%d. %B %Y, %H:%M:%S");

$dann = strtotime("now");
echo strftime("<br>%d. %B %Y, %H:%M:%S", $dann);

$dann = strtotime("3 October 2022");
echo strftime("<br>%d. %B %Y, %H:%M:%S", $dann);

$dann = strtotime("+5 hours");
echo strftime("<br>%d. %B %Y, %H:%M:%S", $dann);

$dann = strtotime("-1 week");
echo strftime("<br>%d. %B %Y, %H:%M:%S", $dann);

$dann = strtotime("next Monday");
echo strftime("<br>%d. %B %Y, %H:%M:%S", $dann);


?>


</body>
</html>
<!--
Mit der Funktion strtotime() kann PHP aus einem String einen Timestamp generieren. Dabei sind unterschiedliche Zeitangeben möglich. Bedingung ist aber, das diese in Englisch erfolgen. 
Dabei sind Angaben wie now, next tuesday, last wednesday, +30 days, -3months etc möglich, ebenso eine englische Datumsangabe. Die Funktion gibt dann eine Sekundezahl zurück, die dem Timestamp für den genannten Zeotpunkt entspricht. 
-->