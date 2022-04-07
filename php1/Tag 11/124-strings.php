<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP</h1>

<?php 

$txt = "info.beispiel@die.gibt.es.nicht.de";
echo $txt."<hr>";

$pos = strpos($txt,"@");
echo "Position des @-Zeichens: $pos<br>";

$pos = strpos($txt,"i");
echo "Position des 1. i-Zeichens: $pos<br>";

$pos = strpos($txt,"i",1);
echo "Position des 2. i-Zeichens: $pos<br>";

$pos = strrpos($txt,"i");
echo "Position des letzten i-Zeichens: $pos<br>";

$pos = strpos($txt,"x");
echo "Position des x-Zeichens: $pos<br>";
var_dump($pos);

if(!$pos){
	echo "<p>Das gesuchte Zeichen ist nicht vorhanden</p>";
}

?>

</body>
</html>
<!--
Strings haben auch Funktionen, mit denen man nach einzelnen Zeichen oder Teilzeichenketten in ihnen suchen kann. 
strpos() bekommt als ersten Parameter den zu durchsuchenden String genannt. 
Der zweite Parameter ist ein String mit dem Zeichen oder der Zeichenfolge, die gesucht wird. 
Die Funktion gibt dann die Indexposition des ersten Treffers zurück, wenn das/die Zeichen gefunden wird. 
Sollte das gescuhte Zeichen nicht vorhanden sein, wird der Wert false zurückgegeben. 
Es wird immer nur der erste Treffer gemeldet. Will man auch den Rest des Strings durchsuchen, muss man einen Offset als drittes Argument nennen. 
Dieser bestimmt, ab welcher Indexposition weitergesucht werden soll. Diese sollte um 1 höher sein als die Position des vorherigen Treffers. 
Mit der Funktion strrpos() durchsucht man den String dann von hinten beginnend, kann also so die Position des letzten Vorkommens ermitteln. 
Wird false gemeldet, weil das gesuchte Zeichen nicht vorhanden ist, kann man dieses in Kombination mit dem logischen NICHT auch als Bedingung für eine if-Abfrage nutzen. 


-->