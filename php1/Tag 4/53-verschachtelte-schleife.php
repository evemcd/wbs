<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
</head>
<body>
<h1>PHP</h1>

<?php 

for($i=1;$i<=3;$i++){

	for($j=1;$j<=5;$j++){
		echo "Zeile $i, Spalte $j // ";
	}

	echo "<br>";

}

?>
<hr>

<?php 
echo "<table border='1'>";
for($i=1;$i<=3;$i++){

	echo "<tr>";

	for($j=1;$j<=5;$j++){
		echo "<td>Zeile $i, Spalte $j</td>";
	}

	echo "</tr>";

}
echo "</table>";
?>
<hr>

<?php 
echo "<table border='1'>";
for($i=1;$i<=10;$i++){

	echo "<tr>";

	for($j=1;$j<=10;$j++){
		echo "<td>". $i*$j."</td>";
	}

	echo "</tr>";

}
echo "</table>";
?>

</body>
</html>
<!--
Wie bedingte Anweisungen können auch Schleifen verschachtelt werden. Dabei wird die innere Schleife (hier mit $j) bei jedem einzelnen Durchlauf der äußeren Schleife (hier mit $i) einmal einen kompletten eigenen Durchlauf machen. 
Das erzeugt eine veirtuelle zweidimensionale Struktur, wobei die äußere Schleife die Zeilen erstellt, die inner dann die Spalten innerhalb der Zeilen. Das passt perfekt zur Struktur der Tabelle in HTML. Die äußere Schleife erschafft darin die tr-Element, während die innere Schleife die td-Elemente anlegt. 
-->