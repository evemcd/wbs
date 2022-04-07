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


//var_dump($conn);

// Ausgabe von Fehlermeldung
if(!$conn){
	die("<h3 style='color:red;'>Verbindung konnte nicht aufgebaut werden: ".mysqli_connect_error()."</h3>");
}

// Wird nur im Erfolgsfall ausgeführt
echo "<h3 style='color:green;'>Die Verbindung wurde erfolgreich aufgebaut</h3>";

?>

</body>
</html>
<!--
Die Funktion mysqli_connect() gibt im Falle eines erfolgreichen Verbindungsaufbaus diese Verbindung in Form eines Objekts zurück. Dieses wird für spätere Anweisungen und Funktionen benötigt und wird deshalb in einer Variablen (hier: $conn) abgefangen. 
Sollte die Verbindung nicht aufgebaut werden können, landet ein false in $conn. Dieses kann mit dem logischen NICHT kombiniert als Bedingung für eine if-Abfrage genutzt werden. Die kann kann mit die() eine Fehlermeldung ausgeben und die Ausführung von PHP beenden. Mit mysqli_connect_error() kann man soagr die Ursache des Fehlers ermitteln. 
Hat die Verbindung geklappt, wird einfach der Code unter dem if ausgeführt. 
-->