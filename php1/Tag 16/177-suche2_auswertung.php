<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP</h1>

<?php 
$conn = mysqli_connect("localhost","root","","kino");
$genre = $_POST["genre"];


$anfrage = "SELECT * FROM filme WHERE genre = '$genre' ";


$resultat = mysqli_query($conn,$anfrage);

if(mysqli_num_rows($resultat)>0){		

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
}else{
	echo "<p>Es wurde kein passender Datensatz gefunden</p>";
}
?>

<p><a href="175-uebung-uebersicht.php">Zurück zur Übersicht</a></p>


</body>
</html>
