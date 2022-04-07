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
mysqli_connect($servername,$benutzername,$passwort);

?>

</body>
</html>
<!--
Um in PHP mit Daten aus einer Datenbank arbeiten zu können, muss zunächst eine Verbindung mit dem Datenbank-Server aufgenommen werden. Diese Aufgabe kann mit der Funktion mysqli_connect() erledigt werden. Die Funktion benötigt dazu drein Werte: Die Adresse des Servers/der Hostname, einen gültigen Benutznamen für diesen Server und das Passwort zu diesem Benutzernamen. 

Sind diese Angaben alle korrekt, baut die Funktion die entsprechende Verbindung auf. 
-->