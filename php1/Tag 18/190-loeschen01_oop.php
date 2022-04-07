<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
<script>

function checker(){
	return window.confirm("Soll der Film wirklich gelöscht werden?");
}

</script>
</head>
<body>
<h1>PHP - MySQLi OOP - Film Löschen Auswahl</h1>

<form action="191-loeschen02_oop.php" method="POST" onsubmit="return checker();">
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

$anfrage = "SELECT * FROM filme";

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
		echo "<td><input type='radio' name='aw' value='$dsatz[id]' checked></td>";
		echo "</tr>";
	}
	echo "</table>";
}else{
	echo "<p>Es wurde kein Datensatz gefunden</p>";
}

// Verbindung zur Datenbank wird geschlossen
$conn->close();
?>
<p><input type="submit" value="Film Löschen"></p>
<p><a href="181-mysqli_oop.php">Zur Übersicht</a></p>
</form>
</body>
</html>
