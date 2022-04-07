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

if($rueckmeldung){
	echo "<h3 style='color:green;'>Der Datensatz wurde erfolgreich eingetragen</h3>";
}else{
	echo "<h3 style='color:red;'>Der Datensatz konnte nicht eingetragen werden</h3>";
}
}
?>

<form action="" method="POST">

<p><input type="text" name="nn"> Nachname</p>
<p><input type="text" name="vn"> Vorname</p>
<p><input type="text" name="ab"> Abteilung</p>
<p><input type="text" name="gh"> Gehalt</p>
<p><input type="text" name="gb"> Geburtstag (YYYY-MM-TT)</p>
<p><input type="text" name="pn"> Personalnummer</p>

<p><input type="submit" value="Datensatz eintragen" name="sender"></p>

</form>


</body>
</html>
<!--
IN dieser Datei wurden das auszufüllende Formular und die asuwertende Datei in einem Dokument zusammengefügt. Dabei sind ein paar Dinge zu beachten. Das Formular erhält keinen Wert für das Attribut action. Das führt dazu, das wenn das Formular gesendet wird, die eigene Datei erneut aufgerufen wird und diese dann auch die Werte aus den Feldern erhält. 
Insbesondere muss aber das gesamte Skripting im PHP Block bedingt werden. Denn wenn die Seiet zum ersten Mal aufgerufen wird, erzeugt sie ansonsten eine Reihe von Fehlermeldungen und gibt an, das der Datensatz nicht eingetragen wurde. 
Das liegt daran, das das Skipt auf den $_POST zugreifen will, dieser aber beim ersten Aufruf der Seite leer ist. Erst nach dem Senden des Formulars ist er gefüllt. 
Das Problem wird behoben, in dem man mit isset() prüft, ob ein bestimmtes Fach in der Superglobalen vorhanden ist. Dazu fragt man nach dem Sendebutton submit, der zu diesem Zwecke ein name-Attribut bekommt.

Egal, welches andere Feld in dem $_POST ansonsten vielliecht vorhanden ist oder nicht, das submit mit name ist immer darin. Ist es vorhanden, wurde das Formular verschickt, wenn nicht, gibt es keinen Werte in dem $_POST und das Skript sollte nicht ausgeführt werden. 
-->