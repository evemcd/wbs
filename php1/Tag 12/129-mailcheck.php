<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP</h1>

<?php 

$mail = "a.aa@aa.aa";

if(strlen($mail)<6){
	die("<p>Ihr Eintrag ist zu kurz</p>");
}

if( !(strpos($mail,"@")) ){
	die("<p>Sie haben kein @-Zeichen verwendet</p>");
}

if( !(strpos($mail,".")) ){
	die("<p>Sie haben keinen Punkt gesetzt</p>");
}

if( strpos($mail,"@") > strrpos($mail,".") ){
	die("<p>Es ist kein . nach dem @-Zeichen</p>");
}

echo "<p>Danke für ihre Angaben</p>";


?>

</body>
</html>
<!--
In dieser Übung wurde die Funktion die() verwendet. Diese gibt den Wert, der ihr als Argument übergeben wurde, in die Seite und beendet anschließend komplett die Ausführung von PHP. Sämtlicher Code, der nach einem ausgeführten die() steht, wird ignoriert. Also ein echo mit "Schluß danach"


-->