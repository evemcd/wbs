<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - Löschen eines Datensatzes - Ausführen</h1>

<?php 

$conn = mysqli_connect("localhost","root","","unternehmen");

$aw = $_POST["aw"];

$anfrage = "DELETE FROM mitarbeiter WHERE persnr = $aw";

$rueckmeldung = mysqli_query($conn,$anfrage);


if($rueckmeldung){
	echo "<h3 style='color:green;'>Der Datensatz wurde gelöscht</h3>";
}else{
	echo "<h3 style='color:red;'>Der Datensatz wurde nicht gelöscht: ".mysqli_error($conn)."</h3>";
}

?>

<p><a href="172-loeschen01.php">Zurück zur Übersicht</a></p>
</body>
</html>
<!--
Datensätze werden mit der SQL-Anweisung DELETE FROM gelöscht. Dahinter wird einfach die Datentabelle genannt, aus der gelöscht werden soll. 
ACHTUNG: Wenn dann keine WHERE Klausel folgt, werden sämtliche Datensätze aus der Tabelle entfernt, ohne weieter Rückfrage und ohne Wiederherstellungsmöglichkeit. 
Die WHERE Klausel ist also wichtig, denn mit ihr kann eningeschränkt werden, welche Datensätze gelöscht wreden sollen. 

-->