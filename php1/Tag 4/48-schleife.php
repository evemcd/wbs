<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
</head>
<body>
<h1>PHP</h1>

<?php 

for($i=1896;$i<=2040;$i+=4){

	if($i==1916||$i==1940||$i==1944)continue;
	if($i>2020)break;

	echo "Olympische Spiele $i<br>";

}

?>

</body>
</html>
<!--
Mit den Anweisungen continue und break kann man eine Schleife auch aus dem Anweisungsblock heraus beeinflussen.
continue bricht den aktuellen Schleifendurchlauf und wechselt direkt zur Inkrementierungsphase und damit zum nächsten Durchlauf. Wird diese Anweisung verwendet, sollte sie stets weiter oben im Anweisungscode stehen und mit einer Bedingung verbunden sein.
break bricht direkt die komplette Schleife vorzeitig ab, beendet sie also völlig und sollte ebenfalls nur in Verbindung mit einer bedingten Anweisung eingesetzt werden.

-->