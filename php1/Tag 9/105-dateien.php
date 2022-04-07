<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - Dateien Lesen</h1>

<?php 

echo readfile("104-info.txt");

?>

</body>
</html>

<!--
PHP hat ein einfaches System integriert, um externe Dateien einzulsen und auch zu bearbeiten.
Eine Reihe Funktionen bieten dazu verschiedene Möglichkeiten.
Die erste hier verwendete Funktion ist readfile(). Sie erwartet einen String mit dem relativen Pfad zu der Datei, die eingelesen werden soll und gibt deren Inhalt dann zurück. 
-->