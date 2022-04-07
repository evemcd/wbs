<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
</head>
<body>
<h1>PHP</h1>

<?php 

for($i=1;$i<=10;$i++){

	echo "$i ";

}

?>
<hr>
<?php 

for($i=10;$i>0;$i--){

	echo "$i ";

}

?>
<hr>
<?php 

for($i=10;$i<=100;$i+=5){

	echo "$i ";

}

?>
<hr>
<?php 

for($i=10;$i<=50;$i+=10){

	echo "<p style='font-size:$i\px'>Hallo Welt in $i Pixeln</p>";

}

?>
</body>
</html>
<!--
Eine for-Schleife führt die Anweisungen in ihren Funktionsklammern immer wieder exakt auf die gleiche Weise aus. 
Man kann aber eine veränderliche Kompenente in den Funktionsklammern verwenden, den Zähler (hier: $i). Dieser ändert sich ja nach jedem Durchlauf, so das er deshalb eine regelmäßige Veränderung in den Anweisungen haben kann. Dann kann es auch Sinn machen, mit anderen Startwerten und mit unterschiedliches Veränderungen zu arbeiten.

HINWEIS: In dem Beispiel, wo der Zähler als Wert für die Schriftgröße in CSS benutzt wird. wurde mit dem \ ein Escape-Zeichen verwendet. Denn die Einheit px muss für CSS direkt hinter dem Wert stehen, in PHP erkennt der Interpreter dann aber die Variable nicht. Durch das \ trennt man die beiden und die Variable wird erkannt. 
Alternativ, da der \ manchmal andere Auswirkungen hat, kann man hier auch mit dem String-Operator arbeiten 
("<p style='font-size:" . $i . "px'>Hallo Welt in $i Pixeln</p>")
-->