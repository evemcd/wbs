<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
</head>
<body>
<h1>PHP</h1>

<?php 


$pw = "bubu";

if( !($pw=="dada") ){

	echo "<p>Zugang gewährt, herzlich Willkommen</p>";
	echo "Obwohl das Passwort falsch war...";

}else{
		
	echo "<p>Zugang verweigert</p>";
		
}

?>

</body>
</html>
<!--
Ein dritter logischer Operator ist das NICHT !
Dieser kehrt ein nachfolgendes true in ein false um und umgekehrt.
Da dieser Operator sehr weit oben in der Rangfolge steht, wird er zumeist mit Klammern kombiniert. 


Ein letzter Operator in PHP ist das XOR.
Dieser verbindet wie ODER zwei Booleans. Wenn beide unterschiedlich sind, also der eine true, der andere false, wird XOR true ergeben. Sollten beide Booleans aber den gleichen Wert haben, also beide true oder beide false sein, wird XOR ebenfalls false. 
-->