<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - Einfügen - Formular und Auswertung</h1>

<?php 
if(isset($_POST["sender"])){
$author = $_POST["author"];
$title = $_POST["title"];
$year = $_POST["year"];
$genre = $_POST["genre"];
$publisher = $_POST["publisher"];
$reihenfolge = $_POST["reihenfolge"];


$servername = "localhost";
$benutzername = "root";
$passwort = "";
$datenbank = "eve";

$conn = mysqli_connect($servername,$benutzername,$passwort,$datenbank);

$anfrage = "INSERT INTO books (author,title,year,genre,publisher,reihenfolge) ";
$anfrage .= "VALUES ('$author','$title',$year,'$genre','$publisher',$reihenfolge)";

$rueckmeldung = mysqli_query($conn,$anfrage);

if($rueckmeldung){
    echo "<h3 style='color:green;'>Der Datensatz wurde erfolgreich eingetragen.</h3>";
}else{
    echo "<h3 style='color:red;'>Der Datensatz konnte nicht eingetragen werden.</h3>";
}
}
?>

<form action="" method="POST">

<p><input type="text" name="author"> Author</p>
<p><input type="text" name="title"> Title</p>
<p><input type="number" name="year"> Year YYYY</p>
<p><input type="text" name="genre"> Genre</p>
<p><input type="text" name="publisher"> Publisher</p>
<p><input type="number" name="reihenfolge"> Order</p>


<p><input type="submit" value="Datensatz eintragen" name="sender"></p>
<p><input type="reset" value="zurücksetzen"></p>

</body>
</html>
