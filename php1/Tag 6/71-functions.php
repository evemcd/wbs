<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP</h1>

<?php 

function trennlinie($zahl,$zeichen){
	for($i=1;$i<=$zahl;$i++){
		echo $zeichen;
	}
}


trennlinie(30,"=");
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
trennlinie(55,"=");
?>

</body>
</html>
<!--
Um Funktionen nich flexibler zu gestalten, kann man eine beliebige Anzahl an Parametern definieren. Diese Parameter werden dann durch Komma getrennt in den Parameterklammern deklariert und können dann alle innerhalb der Funktion verwendet werden. 
Für jeden angegebenen Parameter muss dann aber auch ein Argument vorhanden sein. Diese werden wieder beim Aufruf in den Klammern notiert, wobei auch hier durch Komma getrennt wird. Die Reihenfolge, wie die Parameter notiert wurden, legt dabei die Reihenfolge, in der die Argumente notiertwerden müssen, fest. 

-->