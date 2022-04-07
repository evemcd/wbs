<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - Select mit Mehrfachauswahl</h1>

<?php 

$zutaten = $_POST["zutaten"];

print_r($zutaten);

echo "<hr>";

for($i=0;$i<count($zutaten);$i++){
	echo "$zutaten[$i], ";
}


?>

</body>
</html>
<!--
MIt dem entsprechenden Bezeichner kann man auch, wenn das Formularfeld mehrere Werte liefert, normal in die Superglobale hineingreifen. Der Wert darin ist dann aber ein Array und muss mit den entsprechnden Methoden und Funktionen verarbeitet werden. 

-->