<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
</head>
<body>
<h1>PHP</h1>

<?php 

$raeder = 2;

switch($raeder){
	case "4":
		echo "Auto, wie klassisch";
		break;
	case "0":
		echo "Ein Fußgänger, sehr vernünftig";
		break;
	case "2":
		echo "Fahrrad? Sie wohnen ins Münster, stimmts?";
		break;
	case "3":
		echo "Oh ein Dreirad, wie süß!";
		break;
	case "1":
		echo "Sie sind Akrobat, eindeutig";
		break;
	default:
		echo "Echt? Sie Angeber, Sie!";
}


?>

</body>
</html>
<!--
Wenn man einen ankommenden Wert mit anderen Gegenwerten auf Gleichheit vergleichen möchte, kann man anstelle einer if-elseif-Verkettung auch ein switch einsetzen. 
Dieses wird mit dem Schlüsselwort switch eingeleitet und erhält in seinen Parameterklammern den ankommenden Wert genannt. Innerhalb der Funktionsklammern gibt es dann cases. 
Jeder case bekommt einen Vergleichswert, mit dem der ankommende Wert auf einfache Gleichheit verglichen wird. Sind die beiden Werte nicht gleich, wechselt das switch zum nächsten case. 
Sind die beiden Werte aber doch gleich, so werden alle Anweisungen, die nach dem Doppelpunkt hinter dem switch stehen ausgeführt. 
Und zwar entweder bis zu einer break-Anweisung oder bis das switch endet. Ohne break können also auch Anweisungen aus anderen cases mit ausgeführt werden. 
Sollte keiner der cases einen passenden Vergleichswert haben, kann zusätzlich noch ein default ohne Vergleichswert angegeben werden, um das switch dann auch in diesem Fall etwas 
ausführen zu lassen. 

-->