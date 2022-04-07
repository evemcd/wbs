<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
</head>
<body>
<h1>PHP</h1>

<?php 

do{
	$x= mt_rand(0,9);
	echo $x;
}while($x != 0);


?>

</body>
</html>
<!--
do-while-Schleifen sind besonders dann interessant, wenn in ihren Anweisungen etwas erzeugt, abgefragt oder ausgelsen wird, was für die Bedingung der Schleife benötigt wird. 
Hier im Beispiel wird eine zufällige Zahl von 0 bis 9 erzeugt, wobei die Schleife das solange machen soll, wie diese Zahl keine 0 ist. 
Da also die Bedingung der Schleife zufallszahl ist nicht gleich 0 (§x != 0) ist, macht es Sinn, hier die do-while-Schleife einzusetzen, denn dann wird erst einmal die Zufallszahl erzeugt, bevor sie geprüft wird. 
-->