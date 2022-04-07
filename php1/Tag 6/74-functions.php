<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP</h1>

<?php 

function summe(...$a){
	$sum = 0;
	foreach($a as $wert){
		$sum += $wert;
	}
	return $sum;
	//print_r($a);
}


echo summe(5,7)."<br>";

echo summe(15,7,8)."<br>";

echo summe(5,7,12,34,5,9,2,66,112,3,8)."<br>";
?>



</body>
</html>
<!--
Manchmal kommt es vor, das einer Funktion eine unterschiedliche Anzahl an Argumenetn übergeben wird. 
Da in diesem Fall nicht immer für jedes Argument ein Parameter angelegtr werden kann, packt man diese Argumenet in ein Array. Das wird erzeugt, in dem man beim Deklarieren der Funktion vor den Parameter ... setzt. Dieser weiss nun, er ist ein nummerisch inidziertes Array und sammelt alls ankommenden Argumente in sich. 
Innerhalb der Funktion wird dieser Parameter wie ein Array verwendet, kann also zB mittels Schleife komplett durchgearbeitet werden. 

-->