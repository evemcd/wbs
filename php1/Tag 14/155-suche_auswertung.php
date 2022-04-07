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

$q = $_POST["q"];

$anfrage = "SELECT * FROM mitarbeiter WHERE nachname LIKE '%$q%' OR vorname LIKE '%$q%'";

$resultat = mysqli_query($conn,$anfrage);

// Tabelle wird nur ausgegeben wenn in $resultat min. ein Datensatz vorhanden ist
if(mysqli_num_rows($resultat)>0){		

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
}else{
	echo "<p>Es wurde kein passender Datensatz gefunden</p>";
}
?>

</body>
</html>
<!--
Bei einer Suche mittels Formular wird der aus dem Formular kommende Wert in die SQL-Anweisung mit eingebaut. 
Er wird dann in der Regel zum Vergleichswert innerhalb der WHERE Klausel. 
Allerdings kann es besonders bei frei formulierten Werten zu Resultaten ohne darin befindlichen Datensatz kommen. 
DEshabl sollte die Verarbeitung und Ausgabe der Resultate an die Bedinung geknüpft sein, das die Anzahl der Datensätze im Resultat größer als 0 ist. 
-->