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

?>

</body>
</html>
<!--
So kann man zB das Array, das aus dem Resultat herausgeholt wurde, mit Hilfe eine foreach() Schleife ausgeben.
-->