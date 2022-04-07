<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - MySQLi OOP - Film Löschen durchführen</h1>


<?php 
$servername = "localhost";
$username = "root";
$passwort = "";
$datenbank = "kino";

// Verbindung zur Datenbank wird als Objekt angelegt
$conn = new mysqli($servername,$username,$passwort,$datenbank);

// Check der Verbindung 
if($conn->connect_error){
	die("Verbindung fehlgeschlagen: {$conn->connect_error}");
}

$aw = $_POST["aw"];

$anfrage = "DELETE FROM filme WHERE id = $aw";

// Anfrage an Objekt mit Methode query() stellen, Ergbis ist neues Objekt mit mysqli-Resultat
$conn->query($anfrage);

// Eigenschaft num_rows des Resultat-Objekts wird ausgelesen
if($conn->affected_rows > 0){
	
	echo "<p>Der Film wurde gelöscht</p>";
	
}else{
	echo "<p>Der Film wurde nicht gelöscht: {$conn->error}</p>";
}

// Verbindung zur Datenbank wird geschlossen
$conn->close();
?>
<p><a href="181-mysqli_oop.php">Zur Übersicht</a></p>
</body>
</html>
