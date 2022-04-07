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

$conn = mysqli_connect("localhost","root","","unternehmen");

$anfrage = "INSERT INTO mitarbeiter ";
$anfrage .= "VALUES ('$nn','$vn',$pn,'$ab',$gh,'$gb')";

mysqli_query($conn,$anfrage);

?>

</body>
</html>
<!--
Man kann bei der Formulierung der SQL-Anweisung die Nennung der Spalten auch weglassen, dann folgt auf den Namen der Datentabelle direkt das Schlüsselwort VALUES. Dann allerdings müssen für alle Spalten Werte vorhanden sein. Und diese Werte müssen in der Reihenfolge notiert werden, die die Spalten in der Datentabelle vorgeben. 

-->