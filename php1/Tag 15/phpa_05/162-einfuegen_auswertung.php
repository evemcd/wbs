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

$anfrage = "INSERT INTO mitarbeiter (nachname,vorname,abteilung,gehalt,geburtstag,persnr) ";
$anfrage .= "VALUES ('$nn','$vn','$ab',$gh,'$gb',$pn)";

mysqli_query($conn,$anfrage);

?>

</body>
</html>
<!--
Um Datensätze in eine Datentabelle einzutragen, müssen diese zunächst erfasst werden, etwa mittels Formular. 
Diese Werte werden dann genutzt, um eine entsprechende SQL-Anweisung zu erstellen. 
Diese ist wie immer ein String und beginnt mit dem Schlüsselwort INSERT. Es folgt mit INTO die Angabe, in welche Datentabelle eingetragen werden soll. Dahinter werden in die Regel die Spalten, die einen neuen Wert erhalten sollen, in Klammern durch Komma getrennt aufgelistet. Die Reihenfolge muss dabei nicht der Reihenfolge in der Datentabelle entsprechen, ist aber später wichtig für die Reihenfolge der einzutragenden Daten. 
Diese werden nach dem Schlüsselwort VALUES ebenflass durch Komma getrennt in Klammern notiert. 
Dabei muss darauf geachtet werden, das Werte, die sle String gedacht sind (varchar, date etc) auch hier als String markiert werden müssen, deshalb dann in '' Hochkomma gesetzt werden. Werte die für Zahlenspalten gedacht sind (int, double etc) werden nicht in Hochkomma gesetzt. 
Wenn alles korrekt ausgefüllt wurde, kann dieser Datensatz dann mittels mysqli_query() an die Datenbankverbindung gesendet werden. 
-->