<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
</head>
<body>
<h1>PHP - PHP HTML Preprocessor</h1>

<?php 

$zahl = 125947354.567843;
echo "<p>Originalzahl: $zahl$</p>";

$z1 = number_format($zahl);         // verwandelt in einen String und nur so kann das Format eingestellt werden.
echo "<p>Mit einem Parameter: $z1</p>";

$z2 = number_format($zahl,2);
echo "<p>Mit zwei Parametern: $z2</p>";

$z32 = number_format($zahl,2,",",".");
echo "<p>Mit vier Parametern: $z3</p>";

var_dump($z3);

$test = number_format(10000,3,"T","");
echo "<p>Mit vier Parametern: $test</p>";

?>

</body>
</html>

<!-- Mit der Funktion number_format() kann man Zahlenwerte für die textliche Ausgabe formatieren.
Dazu wird die zu formatierende Zahl als Parameter überlegeben.
Ohne weitere Angaben gibt die Funktion einen String zurück, in dem eventuelle Dezimalstellen weggerundet wurden und der Kommazeichen für die Tausenderteilung verwendet.
Das Runden findet dabei kaufmännisch statt (0-4 ab, 5-9 auf).
Mit dem zweiten Parameter kann man die Anzahl der gewünschten Dezimalstellen angebe. Sind mehr Stellen in der Zahl vorhanden, wird wieder gerundetm sind weniger Stellen vorhanden, wird mit 0 aufgefüllt.
Der dritte und vierte Parameter müssen immer gemeinsam angegeben werden.
Der Dritte ist eine Zeichenkette und bestimmt das Zeichen, das für die Dezimalstelle eingesetzt werden soll.
Der Vierte bestimmt das Zeichen für die Tausenderteilung. -->