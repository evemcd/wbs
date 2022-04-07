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

$servername = "localhost";
$benutzername = "root";
$passwort = "";
$datenbank = "unternehmen";

$conn = mysqli_connect($servername,$benutzername,$passwort,$datenbank);

$anfrage = "INSERT INTO mitarbeiter (nachname,vorname,abteilung,gehalt,geburtstag,persnr) ";
$anfrage .= "VALUES ('$nn','$vn','$ab',$gh,'$gb',$pn)";

$rueckmeldung = mysqli_query($conn,$anfrage);

var_dump($rueckmeldung);

if($rueckmeldung){
    echo "<h3>Der Datensatz wurde erfolgreich eingetragen.</h3>";
}else{
    echo "<h3 style='color:red;'>Der Datensatz konnte nicht eingetragen werden.</h3>";
}

?>

</body>
</html>
