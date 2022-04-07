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
$anfrage = "SELECT * FROM mitarbeiter";
$resultat = mysqli_query($conn,$anfrage);
$dsatz = mysqli_fetch_assoc($resultat);

foreach($dsatz as $schluessel => $wert){
	echo "$schluessel: $wert <br>";
}

echo "<hr>";

$dsatz = mysqli_fetch_assoc($resultat);

foreach($dsatz as $schluessel => $wert){
	echo "$schluessel: $wert <br>";
}
?>

</body>
</html>
<!--
Das Resultat der Datenbank-Anfrage enthält einen internen Pointer, der stets auf den aktuellen Datensatz weisst. 
Die Funktion mysqli_fetch_assoc() liest dann genau diesen Datensatz aus und gibt ihn als Assoziatives Array zurück. 
Dann setzt sie diesen Pointer auf den nächsten Datensatz, so daß bei einem erneuten Anwendne der Funktion der nächste Datensatz als Array zurückgegeben wird. 
Wendet man die Funktion dann sooft an wie Datensätze im Resultat vorhanden sind, kann man alle Werte auslesen. 

-->