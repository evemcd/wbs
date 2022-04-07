<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - Datum und Uhrzeit</h1>

<?php 

$jetzt = time();

$neujahr = mktime(0,0,0,1,1,2022);

$differenz = $neujahr - $jetzt;
echo "Noch $differenz Sekunden bis Neujahr<br>";

$diffmin = floor($differenz/60);        // abrunden
echo "Noch $diffmin Minuten bis Neujahr<br>";

$diffstd = floor($diffmin/60);
echo "Noch $diffstd Stunden bis Neujahr<br>";

$difftag = floor($diffstd/24);
echo "Noch $difftag Tage bis Neujahr<br>";

$reststd = $diffstd%24;
$restmin = $diffmin%60;
$restsek = $differenz%60;
echo "Noch $difftag Tage, $reststd Stunden, $restmin Minuten, $restsek Sekunden bis Neujahr<br>";

?>


</body>
</html>
<!--
Die ermittelten Sekundenwert sind Zahlen, so kann man Zeiträume bestimmen, in dem man eine aktuelle Zeit von einer festgelegten Zeit abzieht. MIt entsprechnden Rechnungen wie Teilen oder Modulo lassen sich diese Differenzwerte dann auch weiter runterbrechen auf andere Zeiteinheiten. Hier helfen dann auch Funktionen wie floor() = Abrunden, round() = kaufmännisch Runden und ceil() = Aufrunden. 

-->