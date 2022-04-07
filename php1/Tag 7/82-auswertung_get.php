<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - Auswertung mit GET</h1>

<?php 

echo $_GET["tf"]; 		

?>

</body>
</html>
<!--
Nutzt man den GET Kanal, landen die Werte aus dem Formular in der SUPERGLOBALEN $_GET.
Diese ähnelt einem Array, wobei die Bezeichner der Formularfelder der Key, die darin eingetragenen oder ausgewählten Eingaben die Werte sind. 
In der weiteren Verarbeitung kann $_GET genauso wie $_POST verwendet werden. 
-->