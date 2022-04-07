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

$anfrage = "SELECT nachname,gehalt FROM mitarbeiter";

$resultat = mysqli_query($conn,$anfrage);

echo "<table border='1'>";

while($dsatz=mysqli_fetch_assoc($resultat)){
	
	echo "<tr>";
	echo "<td>$dsatz[nachname]</td>";
	//echo "<td>$dsatz[vorname]</td>";
	//echo "<td>$dsatz[persnr]</td>";
	//echo "<td>$dsatz[abteilung]</td>";
	echo "<td>$dsatz[gehalt]</td>";
	//echo "<td>$dsatz[geburtstag]</td>";
	echo "</tr>";

}

echo "</table>";
?>

</body>
</html>
<!--
Anstelle des * hinter dem SELECT kann man auch die Spalten auslisten, die man tatsächlich auslesen möchte. Dazu werden die entsprechnden Spaltenüberschriften durch KOmma getrnnt notiert. Dann sind aber auch nur diese Spalten und ihre Werte in dem Resultat und nur diese können dann benutzt werden. 

-->