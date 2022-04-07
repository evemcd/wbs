<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Eingabeformular Auswertung</title>
</head>
<body>

<?php

$text = $_POST["text"];
echo "$text<br>";

$at = strpos($text,"@");
echo "Position @: $at<br>";

$punkt = strpos($text,".");
echo "Position Punkt: $punkt<br>";

if(!($at && $punkt)){                                // geht nicht
	echo "Das ist keine E-Mail Adresse.<br>";
}else{
	echo "Das ist eine E-Mail Adresse<hr>";
}

var_dump(!$at);
var_dump(!$punkt);
var_dump(!$at && !$punkt);


?>
    
</body>
</html>