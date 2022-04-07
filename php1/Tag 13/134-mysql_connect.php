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

// Verbindung aufbauen
$conn = mysqli_connect($servername,$benutzername,$passwort,$datenbank);


//var_dump($conn);

// Ausgabe von Fehlermeldung
if(!$conn){
	die("<h3 style='color:red;'>Verbindung konnte nicht aufgebaut werden: ".mysqli_connect_error()."</h3>");
}

// Wird nur im Erfolgsfall ausgeführt
echo "<h3 style='color:green;'>Die Verbindung wurde erfolgreich aufgebaut</h3>";


// Verbindung zum Datenbankserver wird beendet
mysqli_close($conn);


?>

</body>
</html>
<!--
Mit drei Parametern für mysqli_connect() erreicht man den Datenbankserver, mit dem vierten Parameter kann man dann auch die Datenbank auf diesem Server angeben. Das ist notwendig, denn die nachfolgenden Anfragen richten sich dann immer an Datentabellen von genau dieser Datenbank. 
-->