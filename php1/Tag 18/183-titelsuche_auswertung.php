<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - MySQLi OOP - Titelsuche Ergebnis</h1>

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

$tq = $_POST["tq"];

$anfrage = "SELECT * FROM filme WHERE titel LIKE '%$tq%' OR otitel LIKE '%$tq%'";

// Anfrage an Objekt mit Methode query() stellen, Ergbis ist neues Objekt mit mysqli-Resultat
$resultat = $conn->query($anfrage);

// Eigenschaft num_rows des Resultat-Objekts wird ausgelesen
if($resultat->num_rows > 0){
	echo "<table border='1'>";
	// Methode fetch_assoc() des Resultat-Objekts wird angewendet
	while($dsatz = $resultat->fetch_assoc()){
		echo "<tr>";
		echo "<td>$dsatz[titel]</td>";
		echo "<td>$dsatz[otitel]</td>";
		echo "<td>$dsatz[dauer]</td>";
		echo "<td>$dsatz[jahr]</td>";
		echo "<td>$dsatz[regie]</td>";
		echo "<td>$dsatz[musik]</td>";
		echo "<td>$dsatz[genre]</td>";
		echo "<td>$dsatz[id]</td>";
		echo "</tr>";
	}
	echo "</table>";
}else{
	echo "<p>Es wurde kein Datensatz gefunden</p>";
}

// Verbindung zur Datenbank wird geschlossen
$conn->close();
?>
<p><a href="182-mysqli_oop_suche_form.php">Filme Suchen</a></p> 
</body>
</html>
