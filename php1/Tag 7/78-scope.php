<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP</h1>

<?php 
$a = "<p>Hallo von Draussen</p>";			// globale Variable

function ausgeben(){	
	$a = "<p>Hallo von Innen</p>";			// lokale Variable
	echo $a;		
}

ausgeben();		// lokales a wird ausgegeben

echo $a; 		// globales a wird ausgegeben


?>

</body>
</html>
<!--
Gibt es sowohl innerhalb als auch außerhalb einer Funktion zwei Variablen mit identischem Bezeichner, so sond es doch separate Variablen. Innerhalb der Funktion gilt nur die lokale, außerhalb der Funktion nur die globale Variable. 
Deshalb kann man in Funktionen immer wieder die gleichen Variablen verwenden, diese kommen sich nicht mit anderen in die Quere. Nutzt man mehrere Funktionen, kommen sich auch deren Variablen nicht ins Gehege, die Variablen einer Funktion gelten nur in ihrer eigenen Funktion. 
-->