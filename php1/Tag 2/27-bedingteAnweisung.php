<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
</head>
<body>
<h1>PHP - PHP HTML Preprocessor</h1>

<?php 

$a = 20;

if($a>15){
	echo "<p>Der Wert in der Variablen a ist größer als 15</p>";
}

if($a<15){
	echo "<p>Der Wert in der Variablen a ist kleiner als 15</p>";
}

?>

</body>
</html>
<!--
Soll ein Wert mit mehreren Gegenwerten verglichen werden, kann man das lösen, indem man einfach mehrere if-Abfragen nacheinander programmiert. Das allerdings ist nicht unbedingt eine gute Lösung.

-->