<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - Ändern eines Datensatzes - Auswahl</h1>

<form action="180-aendern2.php" method="post">

<?php 

$conn = mysqli_connect("localhost","root","","kino");
$anfrage = "SELECT * FROM filme";
$res = mysqli_query($conn,$anfrage);

echo "<table border='1'>";
while($dsatz = mysqli_fetch_assoc($res)){
	echo "<tr>";
	echo "<td>$dsatz[titel]</td>";
	echo "<td>$dsatz[otitel]</td>";
	echo "<td>$dsatz[dauer]</td>";
	echo "<td>$dsatz[jahr]</td>";
	echo "<td>$dsatz[regie]</td>";
	echo "<td>$dsatz[musik]</td>";
	echo "<td>$dsatz[genre]</td>";
	echo "<td>$dsatz[id]</td>";
	echo "<td><input type='radio' name='aw' value='$dsatz[id]' checked></td>";
	echo "</tr>";
}
echo "</table>";

?>
<p><input type="submit" value="Datensatz auswählen"></p>
</form>

</body>
</html>