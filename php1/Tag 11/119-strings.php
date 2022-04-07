<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP</h1>

<?php 

$txt = "Hallo Welt";
echo $txt."<br>";

$anz = strlen($txt);
echo "Der String hat $anz Zeichen<hr>";

echo $txt[1]."<hr>";

for($i=0;$i<$anz;$i++){
	echo $txt[$i]."<br>";
}

echo "<hr>";

$txt[9] = "d";
$txt[6] = "G";
echo $txt;
echo "<hr>";

foreach($txt as $buchstabe){
	echo "$buchstabe<br>";
}
?>

</body>
</html>
<!--
Strings lassen sich mit strlen() ihre Anzahl an Zeichen auslesen. 
Und mit [] kann man sogar wie bei einem Array auf einzelne Zeichen zugreifen. 
Denn die Zeichen in einem String sind numerisch indiziert. So kann man ein einzelnes Zeichen auslesen oder einer Indexposition ein neues Zeichen zuweisen. 
Da das möglich ist, kann man nun auch eine for-Schleife verwenden, um such durch alle Zeichen eines Strings einzeln durchzuarbeiten. 
Eine foreach-Schleife ist aber nicht verwendbar, sie ist nur für Arrays da. 
-->