<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - Ändern eines Datensatzes - Änderungen anwenden</h1>

<?php 

$conn = mysqli_connect("localhost","root","","kino");

$tt = $_POST["tt"];
$ot = $_POST["ot"];
$da = $_POST["da"];
$ja = $_POST["ja"];
$re = $_POST["re"];
$mu = $_POST["mu"];
$ge = $_POST["ge"];
$id = $_POST["id"];
$oid = $_POST["oid"];

$anfrage = "UPDATE filme SET titel='$tt',otitel='$ot',dauer='$da',jahr=$ja,regie='$re',musik='$mu',genre='$ge',id=$id WHERE id = $oid";

echo "$anfrage<hr>";

$rueckmeldung = mysqli_query($conn,$anfrage);
$anz = mysqli_affected_rows($conn);

if($rueckmeldung){
	echo "<h3 style='color:green;'>Es wurde $anz Datensatz erfolgreich geändert</h3>";
}else{
	echo "<h3 style='color:red;'>Die Datensätze wurden nicht geändert: ".mysqli_error($conn)."</h3>";
}

?>

<p><a href="175-uebung-uebersicht.php">Zurück zur Übersicht</a></p>

</body>
</html>