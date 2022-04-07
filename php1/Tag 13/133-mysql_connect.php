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

// Verbindung aufbauen
$conn = mysqli_connect($servername,$benutzername,$passwort);


var_dump($conn);

// Ausgabe von Fehlermeldung
if(!$conn){
	die("<h3 style='color:red;'>Verbindung konnte nicht aufgebaut werden: ".mysqli_connect_error()."</h3>");
}

// Wird nur im Erfolgsfall ausgeführt
echo "<h3 style='color:green;'>Die Verbindung wurde erfolgreich aufgebaut</h3>";


// Verbindung zum Datenbankserver wird beendet
mysqli_close($conn);

var_dump($conn);
?>

</body>
</html>
<!--
Eine aufgebaute Verbindung zum Datenbankserver bleibt so lange bestehen, wie die Datei vom PHP-Interpreter verarbeitet wird. Dann wird sie automatisch geschlossen. Man kann eine solche Verbindung aber auch bewusst vorzeitig beenden. Dazu dient die Funjtion mysqli_close() die als Argument das abgefangene Mysqli-Objekt (hier in $conn) erwartet.

-->