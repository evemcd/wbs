<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
</head>
<body>
<h1>PHP</h1>

<?php 

$raeder = "zwei";

switch($raeder){
	case "vier":
	case "4":
		echo "Auto, wie klassisch";
		break;
	case "0":
		echo "Ein Fußgänger, sehr vernünftig";
		break;
	case "ZWEI":	
	case "Zwei":	
	case "zwei":	
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
Die Tatsache, das ein case bei einem Treffer alle nachfolgenden Anweisungen ausführt, auch die aus anderen cases, kann man sich zu nutze machen. So kann man etwa mehrere Vergleichswerte jeweils mit einem eigenen case definieren, aber nur einer davon, nämlich der letzte, bekommt die Anweisungen und das break. 
So werden diese Anweisungen ausgeführt, egal welcher der davorstehenden cases den Treffer hatte. 
-->