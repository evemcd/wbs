<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - Einfügen - Auswertung 2</h1>

<?php 

$nm = $_POST["nm"];
$ap = $_POST["ap"];
$ld = $_POST["ld"];
$st = $_POST["st"];
$ad = $_POST["ad"];
$tl = $_POST["tl"];
$am = $_POST["am"];

if(strlen($am)==0){
	$am="NULL";
}

$conn = mysqli_connect("localhost","root","","unternehmen");

$anfrage = "INSERT INTO kunden (name,ansprechpartner,land,stadt,adresse,telefon,abnahmemenge_monat) ";
$anfrage .= "VALUES ('$nm','$ap','$ld','$st','$ad','$tl',$am)";


echo "$anfrage<hr>";

$rueckmeldung = mysqli_query($conn,$anfrage);

if($rueckmeldung){
	echo "<h3>Der Datensatz wurde erfolgreich eingetragen</h3>";
}else{
	echo "<h3 style='color:red;'>Der Datensatz konnte nicht eingetragen werden</h3>";
}

?>

</body>
</html>
<!--
Wenn eine Spalte in der Datentabelle ein AUTO-Increment besitzt, kann sie ohne das man ihr einen Wert zuweisst, eigenständig einen neuen Wert erzeugen, der immer um 1 höher ist das der bisher höchste Wert. Dazu darf diese Spalte dann aber nicht in der Auflistung der Spalten im INSERT auftauchen und man darf auch keinen Wert dafür notieren. 
Hat man Spalten die NULL-Werte erlauben, muss man dafür sorgen, das an den Stellen, wo ein Formularfeld leergelassen wurde und ein NULL-Wert eingefügt werden soll, dann auch in der SQL-Anweisung NULL steht, da ansonsten ein Leerer String oder aber der Zahlenwert 0 in die Datentabelle eingetragen wird. 


-->