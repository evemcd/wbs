<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP</h1>

<?php 

function trennlinie($zahl){
	for($i=1;$i<=$zahl;$i++){
		echo "=";
	}
}


trennlinie(30);
?>

<h3>Hier haben wir eine Subline</h3>

<?php 
// Funktionsaufruf mit einem Argument
trennlinie(40);
?>

<p>Hier werden Absätze, die in HTML geschrieben wurden, </p>

<?php 

TRENNLINIE(50);

?>

<p>von PHP-Blöcken, die eine Trennlienie erzeugen, unterbrochen</p>

<?php 
trennlinie(55);
?>

</body>
</html>
<!--
Funktionen können flexibler eingesetzt werden, wenn man Parameter nutzt. Ein Parameter ist eine Funktionsinterne Variable, die in den Parameterklammern hinter dem Funktionsbezeichner definiert wird. Dieser Parameter kann dann innerhalb der Funktion an beliebiger Stelle verwendet werden. 
Üblicherweise haben diese Parameter keinen Wert, sie bekommen ihn erst beim Funktionsaufruf. Dort wird dann der Wert der bei genau diesem Aufruf für den Parameter genutzt werden soll, in den Parameterklammern notiert. Diesen Wert nennt man Argument. Ein solches Argument muss dann bei jedem Funktionsaufruf angegeben werden. 

-->