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
$datenbank = "kino";
$conn = mysqli_connect($servername,$benutzername,$passwort,$datenbank);
$titel = $_POST["titel"];

$anfrage = "SELECT * FROM filme WHERE titel OR otitel LIKE '%$titel%'";
$resultat = mysqli_query($conn,$anfrage);

echo "<table border='1'>";
while($dsatz=mysqli_fetch_assoc($resultat)){
	echo "<tr>";
	echo "<td>$dsatz[titel]</td>";
	echo "<td>$dsatz[otitel]</td>";
	echo "<td>$dsatz[dauer]</td>";
	echo "<td>$dsatz[jahr]</td>";
	echo "<td>$dsatz[regie]</td>";
	echo "<td>$dsatz[musik]</td>";
	echo "<td>$dsatz[genre]</td>";
	echo "<td>$dsatz[id]</td>";
	echo "</tr>";
}
echo "</table>";

?>

<p><a href="175-uebung-uebersicht.php">Zurück zur Übersicht</a></p>


</body>
</html>