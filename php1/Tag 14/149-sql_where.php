<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP</h1>

<?php 

$servername = "localhost";
$benutzername = "root";
$passwort = "";
$datenbank = "unternehmen";

$conn = mysqli_connect($servername,$benutzername,$passwort,$datenbank);

$anfrage = "SELECT * FROM mitarbeiter WHERE nachname LIKE '%s%'";

$resultat = mysqli_query($conn,$anfrage);

echo "<table border='1'>";

while($dsatz=mysqli_fetch_assoc($resultat)){
	
	echo "<tr>";
	echo "<td>$dsatz[nachname]</td>";
	echo "<td>$dsatz[vorname]</td>";
	echo "<td>$dsatz[persnr]</td>";
	echo "<td>$dsatz[abteilung]</td>";
	echo "<td>$dsatz[gehalt]</td>";
	echo "<td>$dsatz[geburtstag]</td>";
	echo "</tr>";

}

echo "</table>";
?>

</body>
</html>
<!--
Um Spalten vom Typ varchar, also String-Werte zu durchsuchen, wird in der Regel der LIKE operator verwendet. Er ähnelt dem =, denn er sucht gleiche Werte. Allerdings erlaubt LIKE den Einsatz eines Ersatzzeichens, dem % Symbol.
Damit kann man entsprechnd gesuchte Werte kombinieren, um sie in längeren Zeichenketten zu finden. 
s% zB sucht nach Einträgen, die mit einem s beginnen, danach können noch beliebig viele andere Zeichen folgen.
%s würde Einträge finden, die auf s enden. 
%s% findet sämtliche Einträge, in denen irgendwo ein s vorkommt. 
Natürlich sind auch Kombinationen wie etwa %s%e% möglich, was ein s und ein irgendwo darauf folgendes e suchen würde. Und man kann auch längere Ketten suche, wie etwa %sch%.

-->