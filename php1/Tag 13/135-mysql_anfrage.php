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

// Formulierung der SQL-Anfrage
$anfrage = "SELECT * FROM mitarbeiter";

// Anfrage wird an Datenbank Verbindung gestellt und das Ergebnis abgefangen
$resultat = mysqli_query($conn,$anfrage);


var_dump($resultat); 
?>

</body>
</html>
<!--
Hat man eine Verbindung zu einer Datenbank erfolgreich etabliert, will man natürlich damit arbeiten. Das geschieht in der Regel mit dem Senden einer SQL-Anweisung an die Datenbank. 
Dazu wird zunächst eine solche SQL-Anweisung als String in PHP geschrieben. Hier wird diese Anweisung in der Variablen $anfrage gespeichert. Diese Anweisung wird dann mit Hilfe der Funktion mysqli_query() an die vorliegende Datenbank-Verbindung in $conn gesendet. Da es sich bei der Anfrage um eine SELECT, also eine Auslesen von Datensätzen, handelt, gibt diese Funktion ein Resultats-Objekt zurück. Sollte hier ein Fehler vorliegen, würde der Wert false gemeldet werden, bei anderen Anfrage-Arten käme hier ein true im Erfolgsfall zurück. 
Dieses Ergebnis iwrd in der Regel in einer Variablen (hier: $resultat) abgefangen, um dann wieter verarbeiet zu werden. 
-->