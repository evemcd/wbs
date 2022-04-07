<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
</head>
<body>
<h1>PHP</h1>

<?php 

$x = 0;

while($x < 20){
	$x++;
	echo "$x ";
}

?>

<hr>

<?php 

$x = 0;

while($x < 20){
	echo "$x ";
	$x++;
}

?>


<p><img src="while_schleife.gif"></p>

</body>
</html>
<!--
Die zweite Schleife ist die while-Schleife. Ihr Aufbau ist wesentlich einfacher. Hier gibt es nur eine Bedingung, die erfüllt sein muss, damit die Schleife ihre Anweisungen ausführt. Nach der Ausführung prüft die Schleife dann erneut, ob sie die Anweisungen noch einmal ausführen soll oder beendet wird. 
Die while-Schleife gibt dabei keinen Zähler und auch keine Inkrementierung vor, das muss der Programmierer selber machen. Aber dadurch hat er mehr Flexibilität, etwa ob zuerst Inkrementiert wird und dann ausgeführt oder umgekehrt.
-->