<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - Checkbox</h1>

<?php 

$gechecked = isset($_POST["agb"]);

var_dump($gechecked);


if($gechecked){
	echo "<p>Danke, das sie den AGB zugestimmt haben</p>";
}else{
	echo "<p>Bitte lesen Sie auf alle Fälle unsere AGB</p>";
}

?>

</body>
</html>

<!--
Beim Auswerten einer Checkbox ist der Value völlig unbedeutend. Es interessiert allein, ob die Checkbox angeklickt wurde oder nicht. Wurde sie angeklickt, ist sie mit Ihrem Namen in der Superglobalen vorhanden. Wurde sie nicht angeklickt, ist sie nicht in der Superglobalen zu finden.
Dieser Zustand wird mit der Funktion isset() überprüft. Diese prüft, ob es ein entsprechndes Fach gibt und gibt dann entweder true bim vorhanden sein oder false beim fehlen des Fachs zurück. Und mit diesem Boolean-Wert kann man dann eine if-else-Verzweigung ausführen. 

-->