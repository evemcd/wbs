<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - Ändern</h1>

<?php 

$conn = mysqli_connect("localhost","root","","unternehmen");

$anfrage = "UPDATE mitarbeiter SET gehalt = gehalt + 100 WHERE gehalt < 6000";

$rueckmeldung = mysqli_query($conn,$anfrage);

$anz = mysqli_affected_rows($conn);

if($rueckmeldung){
	echo "<h3>Es wurden $anz Datensätze erfolgreich geändert</h3>";
}else{
	echo "<h3 style='color:red;'>Die Datensätze konnten nicht geändert werden</h3>";
}


?>

</body>
</html>
<!--
Zum Ändern von Datensätzen dient in MySQL die Anweisung UPDATE. Ihr folgt der Name der Datentablle, in der Datensätzegeändert werden sollen. Dahinter kommt das Schlüsselwort SET, hinter dem dann die gewünschten Änderungen als Paare mit Spaltenname = neuerWert notiert werden. 
Dabei kann in der SQL-Anweisung sogar gerechnet werden, etwas wie 
spaltenname = spaltenname - 10
würde zB den Zahlenwert des jeweiligen Datensatzes um 10 verringern, um ihn dann der Spalte wieder zuzuweisen. 
Wenn keine where-Klausel verwendet wird, gilt diese Anweisung für sämtliche Datensätze in der Tabelle.
Also Vorsicht beim Weglassen von where. 

-->