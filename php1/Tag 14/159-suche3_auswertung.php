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

$a = $_POST["a"];


$anfrage = "SELECT * FROM mitarbeiter WHERE abteilung = '$a' ";


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
