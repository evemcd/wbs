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

$anfrage = "SELECT * FROM mitarbeiter WHERE gehalt BETWEEN 3750 AND 3900";

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
Schließlich kann man bei Zahlenwerten auch den BETWEEN Operator anwenden. Dieser erwatet zwei Wert mit AND kombiniert. Es cwerden dann alle Datensätze von der SQL-Anweisung betroffen, deren Wert in der hier angegebenen Spalte zwischen diesen beiden Werten liegt. Dabei sind auch die Datensätze mit eingeschlossen, deren Wert genau den angegebenen Werten entspricht. 


-->