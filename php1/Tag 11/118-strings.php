<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP</h1>

<?php 

$txt2 = "                   Hallo Welt                     ";
echo $txt2."<br>";
$anz = strlen($txt2);
echo "Der String hat $anz Zeichen<hr>";                         // 50 Zeichen

$getrimmt = trim($txt2);
echo $getrimmt."<br>";
$anz = strlen($getrimmt);
echo "Der String hat $anz Zeichen<hr>";                         // 10 Zeichen

$getrimmt = trim($txt2,"tlHA ");
echo $getrimmt."<br>";
$anz = strlen($getrimmt);
echo "Der String hat $anz Zeichen<hr>";                         // 7 Zeichen

?>

</body>
</html>
<!--
MIt der Funktion trim() kann man überschüssigen Whitespace vom Anfang und vom Ende eines Strings entfernen.
Dazu wird dieser String der Funktion als Argument übergeben. Diese gibt dann einen "getrimmten" String zurück, das Original bleibt unverändert. 
Die Funktion hat einen optionalen 2. Paramter, mit dem man eine Liste von Zeichen vorgeben kann, die weggetrimmt werden sollen. 
Von dem String werden dann solange Zeichen vom Anfang und vom Ende entfernt, wie diese Zeichen in der Liste vorkommen. Dabei ist Groß- und Kleinschreibung wichtig.
Daneben gibt es nocht die Funktion ltrim(), die das exakt gleiche macht, aber nur am Anfang des Strings, ebenso gibt es rtrim(), welche dann nur das Ende des Strings bearbeitet. 
-->