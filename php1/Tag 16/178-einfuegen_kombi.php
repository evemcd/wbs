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
$tt = $_POST["tt"];
$ot = $_POST["ot"];
$da = $_POST["da"];
$ja = $_POST["ja"];
$re = $_POST["re"];
$mu = $_POST["mu"];
$ge = $_POST["ge"];
$id = $_POST["id"];

$conn = mysqli_connect("localhost","root","","kino");

$anfrage = "INSERT INTO filme (titel,otitel,dauer,jahr,regie,musik,genre,id) ";
$anfrage .= "VALUES ('$tt','$ot','$da',$ja,'$re','$mu','$ge',$id)";
$rueckmeldung = mysqli_query($conn,$anfrage);

if($rueckmeldung){
    echo "<h3 style='color:green;'>Der Datensatz wurde erfolgreich eingetragen.</h3>";
}else{
    echo "<h3 style='color:red;'>Der Datensatz konnte nicht eingetragen werden.</h3>";
}
}
?>
<form action="" method="POST">
<p><input type="text" name="tt"> Titel</p>
<p><input type="text" name="ot"> Originaltitel</p>
<p><input type="text" name="da"> Dauer</p>
<p><input type="text" name="ja"> Jahr</p>
<p><input type="text" name="re"> Regie</p>
<p><input type="text" name="mu"> Musik</p>
<p><input type="text" name="ge"> Genre</p>
<p><input type="text" name="id"> ID</p>
<p><input type="submit" value="Datensatz eintragen" name="sender"></p>
<p><input type="reset" value="zurücksetzen"></p>

<p><a href="175-uebung-uebersicht.php">Zurück zur Übersicht</a></p>


</body>
</html>
