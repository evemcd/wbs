<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - MySQLi OOP - Film Ändern Änderung vornehmen</h1>

<form action="189-aendern03_oop.php" method="POST">
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

$anfrage = "SELECT * FROM filme WHERE id = $aw";

// Anfrage an Objekt mit Methode query() stellen, Ergbis ist neues Objekt mit mysqli-Resultat
$resultat = $conn->query($anfrage);

// Eigenschaft num_rows des Resultat-Objekts wird ausgelesen
if($resultat->num_rows > 0){
	
	$dsatz = $resultat->fetch_assoc();
	
	echo "<input type='text' name='tt' value=\"$dsatz[titel]\"> Filmtitel<br>";
	echo "<input type='text' name='ot' value=\"$dsatz[otitel]\"> Originaltitel<br>";
	echo "<input type='text' name='da' value=\"$dsatz[dauer]\"> Dauer<br>";
	echo "<input type='text' name='jh' value=\"$dsatz[jahr]\"> Jahr<br>";
	echo "<input type='text' name='rg' value=\"$dsatz[regie]\"> Regie<br>";
	echo "<input type='text' name='mu' value=\"$dsatz[musik]\"> Musik<br>";
	echo "<input type='text' name='ge' value=\"$dsatz[genre]\"> Genre<br>";
	echo "<input type='text' name='id' value=\"$dsatz[id]\"> Id<br>";
	echo "<input type='hidden' name='oriid' value=\"$dsatz[id]\">";
	
}else{
	echo "<p>Es wurde kein Datensatz gefunden</p>";
}

// Verbindung zur Datenbank wird geschlossen
$conn->close();
?>
<p><input type="submit" value="Film ändern"></p>
</form>
</body>
</html>
