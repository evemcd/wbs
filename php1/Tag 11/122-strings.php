<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP</h1>

<?php 

#setlocale(LC_ALL,"de");

$txt = "Hallo liebe Welt. Es ist Dienstag. Machen wir kein Faß darüber auf.";
echo $txt."<br>";

$gross = strtoupper($txt);
echo $gross."<br>";

$klein = strtolower($txt);
echo $klein."<br>";

$anfang = ucwords($txt);
echo $anfang."<br>";

$kette = ucfirst($txt);
echo $kette."<br>";

?>

</body>
</html>
<!--
Strings haben Funktionen, die die Groß- und Kleinschreibung beeinflussen können. 
strtoupper() wandelt alle möglichen Zeichen eines Strings in Großbuchstaben um, strtolower() entsprechend in Kleinbuchstaben. 
Vorsicht hier bei Umlauten und Ligatur-Zeichen. 
Andere Funktion können hier ebenfalls eingesetz werden. 
ucwords() wandelt jeweils die Wortanfänge in Großbuchstaben um, ucfirst() nur den ersten Buchstaben einer Zeichenkette. 
lcfirst() wandelt den ersten Buchstaben in ein Kleinschreibung um. 

-->