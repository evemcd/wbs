<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - MySQLi OOP - Suchformular</h1>

<form action="183-titelsuche_auswertung.php" method="POST">

<p><input type="text" name="tq"><input type="submit" value="Filmtitel Suchen"></p>

</form>

<hr>

<form action="184-regiesuche_auswertung.php" method="POST">

<p><input type="text" name="rq"><input type="submit" value="Regisseur Suchen"></p>

</form>

<hr>

<form action="185-genresuche_auswertung.php" method="POST">

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

$anfrage = "SELECT DISTINCT genre FROM filme";

// Anfrage an Objekt mit Methode query() stellen, Ergbis ist neues Objekt mit mysqli-Resultat
$resultat = $conn->query($anfrage);

// Eigenschaft num_rows des Resultat-Objekts wird ausgelesen
if($resultat->num_rows > 0){
	
	echo "<p><select name='gq'>";
	
	// Methode fetch_assoc() des Resultat-Objekts wird angewendet
	while($dsatz = $resultat->fetch_assoc()){
		echo "<option>$dsatz[genre]</option>";
	}
	
	echo "</select><input type='submit' value='Nach Genre Suchen'></p>";
	
}else{
	echo "<p>Es wurde kein Datensatz zur Genre-Suche gefunden</p>";
}

// Verbindung zur Datenbank wird geschlossen
$conn->close();
?>
<p><a href="181-mysqli_oop.php">Zur Übersicht</a></p>

</form>
</body>
</html>
