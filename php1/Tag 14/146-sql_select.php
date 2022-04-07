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
$datenbank = "unternehmen";

$conn = mysqli_connect($servername,$benutzername,$passwort,$datenbank);

$anfrage = "SELECT DISTINCT abteilung FROM mitarbeiter ORDER BY abteilung";

$resultat = mysqli_query($conn,$anfrage);

echo "<table border='1'>";

while($dsatz=mysqli_fetch_assoc($resultat)){
	
	echo "<tr>";
	//echo "<td>$dsatz[nachname]</td>";
	//echo "<td>$dsatz[vorname]</td>";
	//echo "<td>$dsatz[persnr]</td>";
	echo "<td>$dsatz[abteilung]</td>";
	//echo "<td>$dsatz[gehalt]</td>";
	//echo "<td>$dsatz[geburtstag]</td>";
	echo "</tr>";

}

echo "</table>";
?>

</body>
</html>
<!--
Mit der angehangenen ORDER BY Klausel lässt sich das Ergebnis einer SELECT Abfrage sortieren. Dabei wird die Spalte, nach der sortiert werden soll, hinter dem ORDER BY notiert. Grundsätzlich wird dann Aufsteigend sortiert, mit dem angehängten Zusatz DESC kann das auf Absteigend umgestellt werden. 
Man kann auch mehrere Spalten zur Sortierung heranziehen, die dann durch Komma getrennt notiert werden. Und man kann dann für jede Spalte mit DESC oder mit ASC (aufsteigend) angeben, wie sie sortiert werden soll. 


-->