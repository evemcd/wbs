<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - Auswertung mit POST</h1>

<?php 

echo $_POST["tf"]; 		

?>

</body>
</html>
<!--
Nutzt man den POST Kanal, landen die Werte aus dem Formular in der SUPERGLOBALEN $_POST.
Diese ähnelt einem Array, wobei die Bezeichner der Formularfelder der Key, die darin eingetragenen oder ausgewählten Eingaben die Werte sind. 
In der weiteren Verarbeitung kann $_POST genauso wie $_GET verwendet werden. 
-->