<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - Ändern eines Datensatzes - Änderungen anwenden</h1>



<?php 

$conn = mysqli_connect("localhost","root","","unternehmen");

$nn = $_POST["nn"];
$vn = $_POST["vn"];
$ab = $_POST["ab"];
$gh = $_POST["gh"];
$gb = $_POST["gb"];
$pn = $_POST["pn"];
$oripn = $_POST["oripn"];

// $anfrage = "UPDATE mitarbeiter SET nachname='$nn',vorname='$vn',";
// $anfrage .= "abteilung='$ab',gehalt=$gh,geburtstag='$gb',persnr=$pn WHERE persnr = $oripn";					// where: das gilt nur für den datensatz mit der originalen persnr

$anfrage = "UPDATE mitarbeiter SET nachname='$nn',vorname='$vn',abteilung='$ab',gehalt=$gh,geburtstag='$gb',persnr=$pn WHERE persnr = $oripn";

echo "$anfrage<hr>";																						// zeigt die neuen Werte

$rueckmeldung = mysqli_query($conn,$anfrage);

$anz = mysqli_affected_rows($conn);																			// wieviele änderungen sind vorgenommen?

if($rueckmeldung){
	echo "<h3 style='color:green;'>Es wurde $anz Datensatz erfolgreich geändert</h3>";
}else{
	echo "<h3 style='color:red;'>Die Datensätze wurden nicht geändert: ".mysqli_error($conn)."</h3>";
}

?>

<p><a href="169-aendern01.php">Zurück zur Übersicht</a></p>

</body>
</html>
<!--
In der dritten Datei der Datensatz-Änderung werden die Werte aus dem vorherigen Formular ausgelesen und benutzt, um dann mit einer UPDATE Anweisung die SQL-Anfrage zu formulieren. Dabei muss unbedingt die WHERE-Klausel verwendet werden, um die Änderung auf den zuvor ausgewählten Datensatz zu beschränken. Hier wird die in dem Hidden-Field versteckte Original-Index-Nummer zur Auswahl verwendet.
Die query-Funktion gibt dann wieder einen Boolean zurück, der zur Überprüfung verwendet werden kann. 
Allerdings gibt diese Funktion auch dann ein true zurück, wenn der Datensatz in dem Formular zuvor nicht geändert wurde. Es empfiehlt sich also, mit mysqli_affected_rows() lieber die Anzahl der geänderten Datensätze abzufragen, die in diesem Fall 0 wäre. 
Bei einem false-Ergebnis kann dann noch mit der Funktion mysqli_error() ausgegeben werden, welcher Felhler passiert ist. 

-->