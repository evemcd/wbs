<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP</h1>

<?php 

function trennlinie($zahl,$zeichen="="){
	for($i=1;$i<=$zahl;$i++){
		echo $zeichen;
	}
}


trennlinie(30);
?>

<h3>Hier haben wir eine Subline</h3>

<?php 

trennlinie(40,"#");
?>

<p>Hier werden Absätze, die in HTML geschrieben wurden, </p>

<?php 

TRENNLINIE(50,"&hearts;");

?>

<p>von PHP-Blöcken, die eine Trennlinie erzeugen, unterbrochen</p>

<?php 
trennlinie(55);
?>

</body>
</html>
<!--
Man kann für Parameter auch Default-Werte bestimmen. Diese Werte werden dem Parameter direkt beim DEfinieren zugewiesen. Sollte nun beim Funktionsaufruf kein Argument für diesen Parameter angegeben worden sein, so wird dann der festgelegte Default-Wert verwendet. Gibt es ein Argument, überschreibt dieses den Default. 
Parameter, die einen Default-Wert bekommen, werden beim Definieren der Funktion erst hinter den Parameter ohne Default aufgelistet. 

-->