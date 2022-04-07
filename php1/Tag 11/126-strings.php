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
if(!$pos){
	echo "Das Zeichen @ ist nicht vorhanden<hr>";
}else{
	echo "Position des @-Zeichens: $pos<hr>";
}

$teil = substr($txt,$pos+1);
echo $teil."<br>";

$teil = substr($txt,$pos+1,7);
echo $teil."<br>";

?>

</body>
</html>
<!--
Mit der Funktion substr() kann man einen Teil einer Zeichenkette herauskopieren. 
Dazu wird zum einen der Ursprungsstring angeben, zum zweiten dann die Indexposition, ab der beginnend kopiert werden soll. 
Gibt man nur diese Beiden an, wird der Rest des Strings bis zum Ende kopiert. 
Mit einem dritten Wert kann man dann noch die Anzahl der Zeichen, die kopiert werden sollen begrenzen. 
-->