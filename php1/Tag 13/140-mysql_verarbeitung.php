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


for($i=1;$i<=mysqli_num_rows($resultat);$i++){
	
	$dsatz = mysqli_fetch_assoc($resultat);

	foreach($dsatz as $schluessel => $wert){
		echo "$schluessel: $wert <br>";
	}

echo "<hr>";

}
?>

</body>
</html>
<!--
Der interne Pointer des Resultats, die Verschiebung dieses Pointers durch mysqli_fetch_assoc() und die Information, wieviele Datensätze in dem Resultat vorhanden sind, erlauben nun den Einsatz einer for-Schleife, die mit ihrem Zähler bis zu eben dieser Anzahl zählt und in ihren Anweisungen dann immer wieder die Funktion mysqli_fetch_assoc() ausführt und die Werte des Arrays jeweils verarbeitet.
-->