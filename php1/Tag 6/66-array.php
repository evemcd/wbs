<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP</h1>

<?php 

$ma = ["Tobias"=>44,"Sabine"=>25,"Peter"=>31,"Nadine"=>34,"Horst"=>28];

print_r($ma);

echo "<hr>";

echo $ma["Tobias"];

echo "<hr>";

echo "Tobias ist $ma[Tobias] Jahre alt<hr>";

$ma["Dagmar"] = 55;

$ma["Peter"] = 35;

print_r($ma);

?>

</body>
</html>
<!--
PHP kennt einen zweiten Array-Typ, das Assoziative Array. Hier benutzt man keine fortlaufende Indizierung, um den Key zu definieren, hier wird der Key durch eigene Angaben bestimmt. Deshalb wird beim Erstellen des Arrays für jeden Eintrag ein Schlüssel kit angegeben. $beispiel = array($schuessel => wert,... ) ist hier dann die Syntax.
Unter dem Schlüssel kann man dann jederzeit auf diesen Wert zugreifen und man kann den Wert auch ändern. 
Ebenso kann man mit einem neuen, noch nicht genutzten Schlüssel dem Array neue Werte zuweisen.

-->