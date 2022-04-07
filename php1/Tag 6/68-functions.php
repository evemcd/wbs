<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP</h1>

<?php 
for($i=1;$i<=50;$i++){
	echo "=";
}
?>

<h3>Hier haben wir eine Subline</h3>

<?php 
for($i=1;$i<=50;$i++){
	echo "=";
}
?>

<p>Hier werden Absätze, die in HTML geschrieben wurden, </p>

<?php 
for($i=1;$i<=50;$i++){
	echo "=";
}
?>

<p>von PHP-Blöcken, die eine Trennlienie erzeugen, unterbrochen</p>

<?php 
for($i=1;$i<=50;$i++){
	echo "=";
}
?>

</body>
</html>
<!--
In der Programmierung kommt es häufiger vor, das bestimmte Code-Blöcke an verschiedenen Stellen innerhalb des Programms ausgeführt werden sollen. Dadurch entsteht aller dings ein gehöriger Mehraufwand, sowohl bei der Wartung des Codes als auch bei der Ausführung, die ja immer und immer wieder den identischen Code ausführen muss. 
Zur Optimierung nutzt man dann Funktionen. 
-->