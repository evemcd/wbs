<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP</h1>

<?php 

$servername = "localhost";
$benutzername = "root";
$passwort = "";
$datenbank = "uebung";

$conn = mysqli_connect($servername,$benutzername,$passwort,$datenbank);

$anfrage = "SELECT * FROM login";

$resultat = mysqli_query($conn,$anfrage);

echo "<table border='1'>";

while($dsatz=mysqli_fetch_assoc($resultat)){
	
	echo "<tr>";
	echo "<td>$dsatz[bn]</td>";
	echo "<td>$dsatz[pw]</td>";
	echo "<td>$dsatz[nn]</td>";
	echo "<td>$dsatz[vn]</td>";
	echo "</tr>";

}

echo "</table>";
?>

</body>
</html>
<!--
Mit der SQL-Anweisung SELECT werden Datensätze aus einer Datentabelle ausgelesen. 
Hinter dem SELECT folgt dabei die Angabe, welche Spalten ausgelesen werden sollen. Mit einem * gibt man an, das alle Spalten der Tabelle in das Ergebnis übernommen werden sollen. 
Darauf folgt mit FROM die Angabe welche Datentabelle aus der verbundenen Datenbank benutzt werden soll. 
-->