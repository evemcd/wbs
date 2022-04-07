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
	echo $a;		// Funktioniert nicht weil innerhalb
}

ausgeben();

echo $a; 			// Funktioniert, weil außerhalb


?>

</body>
</html>
<!--
Wird eine Variable außerhalb einer Funktion deklariert und bekommt ihren Wert, so gilt sie auch nur außerhalb, sie ist dann GLOBAL. Innerhalb einer Funktion hat das Programm zunächst keinen Zugriff auf die Variable. 

-->