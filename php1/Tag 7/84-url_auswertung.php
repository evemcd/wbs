<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - URL-Empfang</h1>

<?php 

echo $_GET["inhalt"]; 
echo $_GET["example"];		

?>

</body>
</html>
<!--
Der Superglobalen $_GET ist es vollkommen egal, ob die auszulesenden Werte aus einem Formular kommen oder per Hyperlink übertragen wurden. Hier ist nur wichtig, das diese Angaben hinten an der URL anhängen.

-->