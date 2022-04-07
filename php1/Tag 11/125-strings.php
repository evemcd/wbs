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

// Suche ist case-sensitive
$pos = strpos($txt,"B");
if(!$pos){
	echo "Das Zeichen B ist nicht vorhanden<hr>";
}else{
	echo "Position des B-Zeichens: $pos<hr>";
}

// Suche ist case-insensitive
$pos = stripos($txt,"B");
if(!$pos){
	echo "Das Zeichen B ist nicht vorhanden<hr>";
}else{
	echo "Position des B-Zeichens: $pos<hr>";
}


?>

</body>
</html>
<!--
Standardmäßig suchen strpos() und strrpos() case-sensitive, das bedeutet, sie unterscheiden zwischen Groß- und Kleinschreibung. 
Wenn man aber keinen Unterschied machen möchte, verwendet man die Funktion stripos(), für die Suche von Hinten dann strripos(). 
Beide suchen case-insensitive. 

-->