<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
</head>
<body>
<h1>PHP</h1>

<?php 

$bn = "Gisela";
$pw = "bubu";

if($bn=="Hotte" && $pw=="bubu" || $bn=="Gisela" && $pw=="dada"){

	echo "<p>Zugang gewährt, herzlich Willkommen</p>";

}else{
		
	echo "<p>Zugang verweigert</p>";
		
}
?>

</body>
</html>
<!--
Alle Operatoren in PHP haben eine bestimmte Rangfolge. Dadurch kann man längere Terme bilden, die dann gemäß dieser rangfolge in bestimmten Abläufen abgearbeitet werden. Hier im Beispiel werden zunächst die Vergleiche ausgeführt, dananch dann das Logosche UND und als letzter das Logische ODER

Beispiel: Bn hat Gisela, PW den Wert dada

1. Vergleiche:		(false && false || true && true)
2. log UND:			(false || true)
3. log ODER:		(true)

Beispiel 2: BN hat Gisela, PW den Wert bubu

1. Vergleiche:		(false && true || true && false)
2. log UND:			(false || false)
3. log ODER:		(false)


-->