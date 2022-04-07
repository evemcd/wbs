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

$anfrage = "SELECT * FROM mitarbeiter WHERE nachname = 'parker'";

$resultat = mysqli_query($conn,$anfrage);

echo "<table border='1'>";

while($dsatz=mysqli_fetch_assoc($resultat)){
	
	echo "<tr>";
	echo "<td>$dsatz[nachname]</td>";
	echo "<td>$dsatz[vorname]</td>";
	echo "<td>$dsatz[persnr]</td>";
	echo "<td>$dsatz[abteilung]</td>";
	echo "<td>$dsatz[gehalt]</td>";
	echo "<td>$dsatz[geburtstag]</td>";
	echo "</tr>";

}

echo "</table>";
?>

</body>
</html>
<!--
Besonders wichtig in SQL ist die WHERE Klausel. 
Mit ihr wird die Anzahl der von der SQL-Anweisung betroffenen Datensätze auf die reduziert, die die Bedingung hinter dem Schlüsselwort WHERE erfüllen. Dort wird zumeist eine Vergleichsoperation durchgeführt, in SQL, also auch mit SQL-Operatoren. 
Hinweis: Beim Vergleich von Strings spiel GRoß- und Kleinschreibung keine Rolle.
-->