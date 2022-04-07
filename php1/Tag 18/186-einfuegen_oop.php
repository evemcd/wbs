<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - MySQLi OOP - Film Einfügen</h1>

<?php 

if(isset($_POST["sender"])){
$servername = "localhost";
$username = "root";
$passwort = "";
$datenbank = "kino";

// Verbindung zur Datenbank wird als Objekt angelegt
$conn = new mysqli($servername,$username,$passwort,$datenbank);

// Check der Verbindung 
if($conn->connect_error){
	die("Verbindung fehlgeschlagen: {$conn->connect_error}");
}

$tt = $_POST["tt"];
$ot = $_POST["ot"];
$rg = $_POST["rg"];
$mu = $_POST["mu"];
$ge = $_POST["ge"];
$jh = $_POST["jh"];
$da = $_POST["da"];

$anfrage = "INSERT INTO filme (titel,otitel,regie,musik,genre,jahr,dauer) VALUES ('$tt','$ot','$rg','$mu','$ge',$jh,$da)";

$conn->query($anfrage);

if($conn->affected_rows > 0){
	echo "<p style='color:green;'>Der Film wurde eingetragen</p>";
}else{
	echo "<p style='color:red;'>Der Film wurde nicht eingetragen</p>";
}

$conn->close();
}
?>

<form action="" method="POST">
	<p><input type="text" name="tt"> Filmtitel</p>
	<p><input type="text" name="ot"> Originaltitel</p>
	<p><input type="text" name="rg"> Regie</p>
	<p><input type="text" name="mu"> Musik</p>
	<p><input type="text" name="ge"> Genre</p>
	<p><input type="number" name="jh" min="1890"> Jahr</p>
	<p><input type="number" name="da" min="1"> Dauer</p>
	<p><input type="submit" name="sender" value="Film Eintragen"></p>
</form>

<p><a href="181-mysqli_oop.php">Zur Übersicht</a></p>
</body>
</html>
