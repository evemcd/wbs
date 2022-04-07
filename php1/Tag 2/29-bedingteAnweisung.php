<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
</head>
<body>
<h1>PHP - PHP HTML Preprocessor</h1>

<?php 

$a = 15;

if($a>15){
	echo "<p>Der Wert in der Variablen a ist größer als 15</p>";
}elseif($a<15){
	echo "<p>Der Wert in der Variablen a ist kleiner als 15</p>";
}else{
	echo "<p>Der Wert in der Variablen a ist genau 15</p>";
}

?>

</body>
</html>
<!--
Auch die Anweisungen eines else können an Bedingungen geknüpft werden. Dann verwendet man an dieser Stelle elseif und setzt in den Parameterklammern eine entsprechende Vergleichsoperation ein. 
Diese Bedingung wird nur überprüft, wenn die vorhergehende ein false ergben hat, und sie muss true ergeben, damit die Anweisungen des elseif ausgeführt werden. 
Auf ein elseif kann dann auch wieder ein else folgen, das dann ausgeführt wird, wenn alle vorhergehenden Vergleiche false ergben haben, oder ein erneutes elseif mit wieder einen neuen Bedingung und dann wenn gewünscht auch wieder einem else.
Diese Aneinanderreiheung lässt sich beliebig lang fortsetzen. 
-->