<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
</head>
<body>
<h1>PHP - PHP HTML Preprocessor</h1>

<?php 

$a = 10;

if($a>15){
	echo "<p>Der Wert in der Variablen a ist größer als 15</p>";
}else{
	echo "<p>Der Wert in der Variablen a ist kleiner als 15</p>";
}

?>

</body>
</html>
<!--
Man kann eine bedingte Anweisung um eine else-Anweisung erweitern. Diese else-Anweisung wird in dem Moment, wenn die Bedingung des ursprünglichen if ein false ergeben hat, ausgeführt. Ansonsten wird das else ignoriert. 
-->