<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
</head>
<body>
<h1>PHP</h1>

<?php 


$pw = "Bubu";

if($pw=="BUBU" || $pw=="bubu" || $pw=="Bubu"){

	echo "<p>Zugang gewährt, herzlich Willkommen</p>";

}else{
		
	echo "<p>Zugang verweigert</p>";
		
}
?>

</body>
</html>
<!--
Ein weiterer logischer Operator ist das logische ODER ||
Auch damit werden in der Regel Vergleichsoperationen verbunden. Hier genügt auf einer Seite des ODERs ein true Wert, damit auch das ODER selber true wird. Nur wenn beide Seiten false ergeben, wird es selber false. 
Eine andere Schreibweise wäre OR, aber auch diese wird in der Operatoren-Rangfolge erst später ausgeführt. 
-->