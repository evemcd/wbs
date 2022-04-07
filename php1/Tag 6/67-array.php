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

foreach($ma as $schluessel => $wert){
	
	echo "<p>$schluessel ist $wert Jahre alt</p>";
	
}

echo "<hr>";

foreach($ma as $wert){
	
	echo "<p>$wert Jahre alt</p>";
	
}

?>

</body>
</html>
<!--
Da ein assoziatives Array nicht fortlaufend nummerisch indiziert ist, kann man es auch nicht mit einen üblichen for-Schleife verarbeiten. Deshalb kennt PHP die foreach-Schleife. 
Diese Schleife wird quasi ausschließlich zur Verarbeitung von Arrays verwendet. Ihr wird in den Parameterklammern der Bezeichner das Arrays übergeben. dahinter wird mit dem Schlüsselwort as bestimmt, welche Angaben aus dem Array in welche Variable gelegt werden soll. Wird hier nur eine Variable genannt, arbeitet sich die Schleife durch das Array durch und legt jeweils den Wert in diese Variable. Und zwar bis alle Einträge in dem Array verarbeitet sind. 
Gibt man zwei Variablen an, getrennt durch =>, so landet in der ersten Variable der Key, der Schlüssel, in der zweiten Variable der dazugehörige Wert. Und die Schleofe arbeitet sich auch hier durch sämtlich Key-Value-Paare durch. 

-->