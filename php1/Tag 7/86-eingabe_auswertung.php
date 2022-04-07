<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - Eingabefelder</h1>

<?php 

echo $_POST["tf"];

$pw = $_POST["pw"];
$nm = $_POST["nm"];
$fb = $_POST["fb"];
$hf = $_POST["hf"];

echo "<p>Passwortfeld: $pw</p>";
echo "<p>Zahlenfeld: $nm</p>";
echo "<p>Farbfeld: $fb</p>";
echo "<p>Verstecktes Feld: $hf</p>";

?>


</body>
</html>
<!--
Die Werte aus Eingabefeldern sind einfach über die genutzte Superglobale abrufbar, können direkt genutzt oder erst Variablen zugewiesen werden. 
Der Datentyp ist dabei immer String
-->