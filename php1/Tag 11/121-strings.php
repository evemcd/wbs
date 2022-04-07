<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP</h1>

<?php 

$txt = "Hallo Welt. Es ist Dienstag.";
echo $txt."<br>";

$worte = explode(" ",$txt);
print_r($worte);
echo "<hr>";

$teile = explode("e",$txt);
print_r($teile);
echo "<hr>";

$teile = explode("",$txt);
print_r($teile);

?>

</body>
</html>
<!--
Ein String kann auch in ein Array zerlegt werden. Dazu dient die Funktion explode(). 
Sie ist das genaue Gegenteil von implode() bzw join(), die ja aus einem Array einen String machen. 
explode() bekommt zunächst angegeben, bei welchem Zeichen in dem String die Aufteilung vollzogen werden soll. 
Diese Zeichen tauchen dann später in dem Array nicht mehr auf, dafür wird bei jedem Auftreten des Zeichens ein neues Fach in dem Array angelegt. 
Ist das Zeichen mehrfach hintereinander in dem String verwendet worden, werden in dem Array Fächer mit einem leeren String darin angelegt. 
Und die Groß- und Kleinschreibung wird hier ebenso beachtet. 
Die Funktion MUSS stets ein Zeichen zum Aufteilen als erstes Argument erhalten, ein Weglassen oder ein leerer String werden hier nicht akzeptiert. 
-->