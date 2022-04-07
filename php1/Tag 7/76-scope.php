<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP</h1>

<?php 

function ausgeben(){
	$a = "<p>Hallo von Innen</p>";			// lokale Variable
	echo $a;
}

ausgeben();

echo $a; // existiert nicht


?>

</body>
</html>
<!--
Variablen haben im Zusammenspiel mit Funktionen einen sogenannten Gültigkeitsbereich (Scope). 
Wenn eine Variable innerhalb einer Funktion erschaffen wird und ihren Wert zugewiesen bekommt, ist sie LOKAL. 
Das bedeutet sie kann nur innerhalb der Funktion genutzt werden, außerhalb existiert sie nicht. 

-->