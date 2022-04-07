<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - Übersicht</h1>
<form action="176-suche_auswertung.php" method="POST">
<input type="text" name="titel">
<input type="submit" value="Film suchen">
</form>

<form action="177-suche2_auswertung.php" method="POST">
<p><select name="genre">


<?php 
$conn = mysqli_connect("localhost","root","","kino");
$anfrage = "SELECT DISTINCT genre FROM filme ORDER BY genre";
$resultat = mysqli_query($conn,$anfrage);
while($dsatz = mysqli_fetch_assoc($resultat)){
	echo "<option>$dsatz[genre]</option>";
}
?>

</select></p>
<p><input type="submit" value="Genre suchen"></p>
</form>


<hr>

<?php 
$conn = mysqli_connect("localhost","root","","kino");

$anfrage = "SELECT * FROM filme";
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

<hr>
<a href="178-einfuegen_kombi.php">Daten eintragen</a>
<br>

<a href="179-aendern1.php">Daten ändern</a>
<br>

<a href="182-loeschen1.php">Daten löschen</a>

</body>
</html>