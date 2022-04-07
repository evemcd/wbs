<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
</head>
<body>
<h1>PHP</h1>

<?php 

$bn = "Hotte";
$pw = "bubu";

if($bn=="Hotte"){

	if($pw=="bubu"){

		echo "<p>Zugang gewährt, herzlich Willkommen</p>";

	}else{
		
		echo "<p>Zugang verweigert</p>";
		
	}

}else{
		
	echo "<p>Zugang verweigert</p>";
		
}
?>

</body>
</html>
<!--
Bedingte Anweisungen können auch verschachtelt werden. Dabei wird eine if-Abfrage ind die Anweisungen einer äußeren if-Abfrage platziert. Und die Anweisungen der inneren if-Abfrage werden nur ausgeführt, wenn sowohl die äußere als auch die innere if-Abfrage ein true Ergebnis in ihren Bedingungen erzielen. 


-->