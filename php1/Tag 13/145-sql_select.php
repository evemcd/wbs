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

$anfrage = "SELECT DISTINCT abteilung FROM mitarbeiter";

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
Durch das Schlüsselwort DISTINCT hinter dem SELECT kann man dafür sorgen, das bei der ausgewählten Spalte keine Doppelnennungen vorkommen. Wenn also ein Wert gefunden wurde, bleibt dieser im Resultat, ein zweiter, identischer Wert taucht dann aber nicht mehr auf. 

-->