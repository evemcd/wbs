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

echo strftime("%H:%M:%S");

echo strftime("<br>%j. Tag des Jahres");

echo strftime("<br>%d.%m.%Y");      // y -> 21, Y -> 2021

echo strftime("<br>Heute ist %A");

setlocale(LC_ALL,"de");

echo strftime("<br>Heute ist %A");

setlocale(LC_ALL,"fr");

echo strftime("<br>Heute ist %A");

setlocale(LC_ALL,"de");

echo strftime("<hr>%A, den %d. %B %Y, %H:%M:%S");

echo strftime("<hr>%A, den %d. %B %Y, %H:%M:%S", 1515151515);


?>


</body>
</html>
<!--
strftime() bietet die Möglichkeit, einen Timestamp als String formatiert auszugeben. 
Dazu bekommt die Funktion einen String als Argument, der als Muster für die Ausgabe dient. Hier werden alle gewünschten Zeitangaben mittels Code angegeben. %A zB steht für den ausgeschriebenen Wochentag, %Y für die vierstellige Jahreszahl usw. Dazu können dann in dem String beliebige andere Zeichen für die gewünscht e Ausgabe verwendet werden. 
Eine Übersicht der möglichen Codes findet sich hier: https://www.w3schools.com/php/func_date_strftime.asp
Der zweite Parameter ist optional und soll einen Timestamp erhalten. Wird er weggelassen, wird automatisch der aktuelle Zeizpunkt auf dem Server ermittelt. Man kann hier aber etwa einen mit mktime bestimmten Zeitpunkt angeben. Oder einfach sogar nur eine Zahl. 
-->