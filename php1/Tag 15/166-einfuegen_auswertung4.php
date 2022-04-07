<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - Einfügen - Auswertung mit Rückmeldung</h1>

<?php 

$nm = $_POST["nm"];
$ap = $_POST["ap"];
$ld = $_POST["ld"];
$st = $_POST["st"];
$ad = $_POST["ad"];
$tl = $_POST["tl"];
$am = $_POST["am"];

$servername = "localhost";
$benutzername = "root";
$passwort = "";
$datenbank = "unternehmen";

if(strlen($am)==0){
    $am="NULL";
}

$conn = mysqli_connect($servername,$benutzername,$passwort,$datenbank);

$anfrage = "INSERT INTO kunden (name,ansprechpartner,land,stadt,adresse,telefon,abnahmemenge_monat) ";
$anfrage .= "VALUES ('$nm','$ap','$ld','$st','$ad','$tl','$am')";

$rueckmeldung = mysqli_query($conn,$anfrage);

if($rueckmeldung){
    echo "<h3>Der Datensatz wurde erfolgreich eingetragen.</h3>";
}else{
    echo "<h3 style='color:red;'>Der Datensatz konnte nicht eingetragen werden.</h3>";
}

?>

</body>
</html>
