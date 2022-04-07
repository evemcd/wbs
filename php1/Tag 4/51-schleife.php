<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
</head>
<body>
<h1>PHP</h1>

<?php 

$x = 30;

do{
	$x+= mt_rand(1,6);
	echo "$x<br>";
}while($x < 20);



?>

<p><img src="do_while_schleife.gif"></p>

</body>
</html>
<!--
Die dritte Schleife ist die do-while-Schleife. Sie ähnelt der while-Schleife, ist aber "fussgesteuert". Das bedeutet, das sie zunächst einmal ihre Anweisungen ausführt und erst dananch prüft, ob die Bedingung für einen weiteren Schleifendurchlauf erfüllt sind. Man kann also mit dieser Schleife sicherstellen, das die Anweisungen mindestens einmal ausgeführt, egal, ob die Bedingung von Anfang an erfüllt wurde oder nicht. 
-->