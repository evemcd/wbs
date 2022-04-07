<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - Löschen eines Datensatzes - Ausführen</h1>

<?php 

$conn = mysqli_connect("localhost","root","","kino");

$aw = $_POST["aw"];

$anfrage = "DELETE FROM filme WHERE id = $aw";

$rueckmeldung = mysqli_query($conn,$anfrage);


if($rueckmeldung){
	echo "<h3 style='color:green;'>Der Datensatz wurde gelöscht</h3>";
}else{
	echo "<h3 style='color:red;'>Der Datensatz wurde nicht gelöscht: ".mysqli_error($conn)."</h3>";
}

?>

<p><a href="175-uebung-uebersicht.php">Zurück zur Übersicht</a></p>
</body>
</html>
