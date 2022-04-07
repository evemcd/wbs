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
	global $a;								// globale Variable wird in Funktion bekannt gemacht
	$a = "<p>Hallo von Innen</p>";			// globale Variable wird in Funktion geändert
	echo $a;								// globale Variable wird ausgegeben
}

ausgeben();		// Aufruf, der globale Variable ausgibt

echo $a; 		// globales a wird ausgegeben


?>

</body>
</html>
<!--
Man kann global erschaffene Variablen aber dennoch in Funktionen nutzen. Dazu muss diese Variable bewusst in der Funktion mit dem Schlüsselwort global bekannt gemacht werden. Danach gilt die Variable auch hier, kann genutzt und geändert werden. Da sie nach wie vor global ist, gilt sie dennoch weiter außerhalb. Wurde sie in der Funktion geändert, behält sie diese Änderung auch, wenn die Funktion bereits beendet wurde. 

-->