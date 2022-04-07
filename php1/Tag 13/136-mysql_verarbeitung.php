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

// Anzahl der gefundenen Datensätze auslesen
$anzahl = mysqli_num_rows($resultat);

echo "<p>Anzahl der Mitarbeiter: $anzahl</p>";

?>

</body>
</html>
<!--
Für die weiteren Verarbeitungsschritee werden weiter Funktionen benötigt, die dann das Resultat der Anfrage verarbeiten sollen. Die erste Funktion dieser Art ist mysqli_num_rows(). Diese bekommt als Argument das Resultat der Anfrage übergeben und gibt eine Zahl zurück, die der Anzahl der gefundenen Datensätze in dem Resultat entspricht.  
-->