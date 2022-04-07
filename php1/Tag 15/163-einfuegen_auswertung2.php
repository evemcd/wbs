<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - Einfügen - Auswertung</h1>

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

$anfrage = "INSERT INTO mitarbeiter ";
$anfrage .= "VALUES ('$nn','$vn',$pn,'$ab',$gh,'$gb')";

mysqli_query($conn,$anfrage);

?>

</body>
</html>
