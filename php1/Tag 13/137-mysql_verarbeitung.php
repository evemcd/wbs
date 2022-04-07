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

$anfrage = "SELECT * FROM mitarbeiter";

$resultat = mysqli_query($conn,$anfrage);

$dsatz = mysqli_fetch_assoc($resultat);

print_r($dsatz);

?>

</body>
</html>
<!--
Um das Resultats-Objekt in etwas für PHP verarbeitbares umzuwandeln kann man die Funktion mysqli_fetch_assoc() verwenden. Diese bekommt das Resultat als Argument zugewiesen und gibt dann ein Assoziatives Array mit dem aktuellen Datensatz zurück, hier der erste Datensatz. 
Dieses Array hat die Überschriften der Tabellenspalten aus der Datentabelle als Schlüssel. 
Und es kann dann mit den bekannten Möglichkeiten verabeitet werden. 
-->