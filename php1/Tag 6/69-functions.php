<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP</h1>

<?php 

// Funktionsdefinition:
function trennlinie(){
	for($i=1;$i<=60;$i++){
		echo "=";
	}
}

// Funktionsaufruf:
trennlinie();
?>

<h3>Hier haben wir eine Subline</h3>

<?php 
// Funktionsaufruf:
trennlinie();
?>

<p>Hier werden Absätze, die in HTML geschrieben wurden, </p>

<?php 
// Funktionsaufruf:
TRENNLINIE();
// Groß-Klein-Schreibung wird bei Funktionsnamen nicht beachtet
?>

<p>von PHP-Blöcken, die eine Trennlienie erzeugen, unterbrochen</p>

<?php 
trennlinie();
?>

</body>
</html>
<!--
Code, der immer wieder verwendet wird, kann in eine Funktion ausgelagert werden. So eine Funktion sammelt Anweisungen unter einem Bezeichner, mit dem diese Anweisungen dann zu einem beliebigen Zeitpunkt innerhalb des Codes aufgerufen und ausgeführt werden könne. 
Eien Funktionsdefinition wird mit dem Schlüsselwort function eingeleitet, auf das nach einem Leerzeichen der Bezeichner folgt. Hier gelten die allgemeinen Namensregeln. Dahinter kommen Parameterklammern(), gefolgt von den Funktionsklammern {}, in denen die gesammelten Anweisungen stehen. 
Diese Funktionsdefinition ist zunächst einmal passiv, der Code darin wird nicht automatsich ausgeführt. 
Stattdessen wartet die Funktion darauf, aufgerufen zu werden. Das geschieht mit dem Funktionsaufruf, wober der Bezeichner der Funktion mit Parameterklammern als Anweisung im Code notiert wird. Funktionsnamen sind nicht case-sensitive. 
Eine Funktion kann an beliebiger Stelle im Code definiert sein, sie kann dann überall im Programm aufgerufen werden. Funktionen werden deshalb häufig in externen Dateien abgelegt, um dann mittels include eingebunden zu werden. 
-->