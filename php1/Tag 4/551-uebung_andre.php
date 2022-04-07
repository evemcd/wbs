<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
</head>
<body>
<h1>PHP</h1>

<?php 

$sp1 = 0;
$sp2 = 0;

while($sp1 < 24  && $sp2 < 24){
	
	$w1 = mt_rand(1,6);
	$w2 = mt_rand(1,6);
	
	$sp1 += $w1;
	$sp2 += $w2;
	
	echo "<p>Spieler 1: Dieser Wurf $w1, insgesamt $sp1<br>";
	echo "Spieler 2: Dieser Wurf $w2, insgesamt $sp2</p>";
}

if($sp1>$sp2){
	echo "<h3>Spieler 1 hat gewonnen</h3>";
}elseif($sp1<$sp2){
	echo "<h3>Spieler 2 hat gewonnen</h3>";
}else{
	echo "<h3>Unentschieden</h3>";
}

?>

</body>
</html>