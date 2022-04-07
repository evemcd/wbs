<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - Einfügen - Auswertung mit Rückmeldung</h1>

<?php 

$nn = $_POST["nn"];
$vn = $_POST["vn"];
$ab = $_POST["ab"];
$gh = $_POST["gh"];
$gb = $_POST["gb"];
$pn = $_POST["pn"];

$conn = mysqli_connect("localhost","root","","unternehmen");

$anfrage = "INSERT INTO mitarbeiter (nachname,vorname,abteilung,gehalt,geburtstag,persnr) ";
$anfrage .= "VALUES ('$nn','$vn','$ab',$gh,'$gb',$pn)";

$rueckmeldung = mysqli_query($conn,$anfrage);

var_dump($rueckmeldung);

if($rueckmeldung){
	echo "<h3>Der Datensatz wurde erfolgreich eingetragen</h3>";
}else{
	echo "<h3 style='color:red;'>Der Datensatz konnte nicht eingetragen werden</h3>";
}

?>

</body>
</html>
<!--
Wenn die SQL-Anweisung ein INSERT ausführt, wird von der Funktion mysqli_query() kein MySQLi-Objekt zurückgegeben, das gibt es nur bei SELECT. Stattdessen gibt die Funktion einen Boolean zurück, nach erfolgreichem Ausführen ein True, bei Nicht-Eintragung ein False.
Dieser Wert kann dann für eine entsprechende Rückmeldung genutzt werden. 

-->