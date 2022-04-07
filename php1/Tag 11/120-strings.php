<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP</h1>

<?php 

$txt = "Hallo Welt. Es ist Dienstag.";
echo $txt."<br>";

$zahl = str_word_count($txt);
echo $zahl;
?>

</body>
</html>
<!--
In PHP lässt sich nicht nur die Anzahl der Zeichen in einem String ermitteln, auch die Anzahl der darin befindlichen Worte. 
Dazu dient die Funktion str_word_count(). Sie gibt die Zahl der Worte in dem als Argument genannten String zurück. 
Dabei erkennt die Funktion Leerzeichen und Satzzeichen als Worttrenner. Den Bindestrich - allerdings erkennt sie nicht.

-->