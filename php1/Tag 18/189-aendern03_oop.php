<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - MySQLi OOP - Film Ändern Änderung durchführen</h1>


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

$tt = $_POST["tt"];
$ot = $_POST["ot"];
$da = $_POST["da"];
$jh = $_POST["jh"];
$rg = $_POST["rg"];
$mu = $_POST["mu"];
$ge = $_POST["ge"];
$id = $_POST["id"];
$oriid = $_POST["oriid"];


$anfrage = "UPDATE filme SET titel=\"$tt\", otitel=\"$ot\", dauer=$da, jahr=$jh, regie=\"$rg\", musik=\"$mu\", genre=\"$ge\", id=$id WHERE id = $oriid";

// Anfrage an Objekt mit Methode query() stellen, Ergbis ist neues Objekt mit mysqli-Resultat
$conn->query($anfrage);

// Eigenschaft num_rows des Resultat-Objekts wird ausgelesen
if($conn->affected_rows > 0){
	
	echo "<p>Der Film wurde geändert</p>";
	
}else{
	echo "<p>Der Film wurde nicht geändert</p>";
}

// Verbindung zur Datenbank wird geschlossen
$conn->close();
?>
<p><a href="181-mysqli_oop.php">Zur Übersicht</a></p>
</body>
</html>
