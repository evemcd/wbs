<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
</head>
<body>
<h1>PHP</h1>


<?php 

$player1total = 0;
$player2total = 0;

do{
	$wuerfel = mt_rand(1,6);
	$player1total += $wuerfel;
		echo "Player 1 hat diese Runde $wuerfel und insgesamt $player1total<br>";
	$wuerfel = mt_rand(1,6);
	$player2total += $wuerfel;
	echo "Player 2 hat diese Runde $wuerfel und insgesamt $player2total<br>";	
}while($player1total < 24 && $player2total < 24);
if($player1total == $player2total) {
	echo "unentschieden";
}elseif($player1total > $player2total){
	echo "Player 1 gewinnt";
}elseif($player1total < $player2total){
	echo "Player 2 gewinnt";
}

?>



</body>
</html>
