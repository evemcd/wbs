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


while($dsatz=mysqli_fetch_assoc($resultat)){
	
	echo $dsatz["vorname"]." ".$dsatz["nachname"];
	echo " arbeitet in der Abteilung $dsatz[abteilung]";
	echo " und verdient $dsatz[gehalt] Euro";
	echo "<br>";

}
?>

</body>
</html>
<!--
Um alle gefundenen Datensätze aus einem Resultat auszulesen, muss nicht unbedungt eine for-Schleife verwendet werden. Auch eine while-Schleife ist möglich. Dazu wird die Funktion mysqli_fetch_assoc() mit ihrer Zuweisung ind die Variable einfach in die Bedingung der while-Schleife gesetzt. Solange diese Funktion Datensätze aus dem Resultat auslesen und in ein Array umwandeln kann, betrachtet die while Schleife das als true-Wert und läuft weiter. Erreicht die Funktion das Ende des Resultats, sind also keine Datensätze merh vorhanden, gibt sie false zurück und die Schleife endet. 

Auch zum Auslesen der einzelnen Werte in dem Array muss keine foreach-Schleife verwendet werden. Man kann wie bei jedem Assoziativen Array die Werte auch über die Bezeichner individuell ansprechen. und so jeden Wert auch individuell weiterverarbeiten. 
-->