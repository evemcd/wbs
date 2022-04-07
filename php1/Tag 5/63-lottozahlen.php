<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
<style>

div		{	width:50px;
			height:50px;
			border:1px solid black;
			font-size:30px;
			font-weight:bold;
			font-family:Arial;
			text-align:center;
			line-height:50px;
			border-radius:50%;
			display:inline-block;
			margin-right:20px;	}

</style>
</head>
<body>
<h1>Lottozahlen</h1>

<?php 
$kugeln = array();
// Leeres Array für die Lotto-Kugeln erschafft

for($i=1;$i<=49;$i++){
	array_push($kugeln,$i);
}
// Die Zahlen von 1 bis 49 werden in Kugel-Array gepusht

shuffle($kugeln);
// Das Kugel-Array wird durchmischt, die Zahlen zufällig angeordnet

$ziehung = array();
// Leeres Array für die gezogenen Zahlen erschafft

for($i=1;$i<=6;$i++){
	$gezogen = array_shift($kugeln); // 1. Zahl aus $kugeln wird ausgeschnitten
	array_push($ziehung,$gezogen);	// ausgeschnittene Zahl wird in $ziehung gepusht
}
// Die ersten 6 Zahlen aus $kugeln werden ausgeschnitten und dann in $ziehung gepusht

sort($ziehung);
// Die sechs gezogenen Zahlen werden aufsteigend sortiert


for($i=0;$i<6;$i++){
	echo "<div>$ziehung[$i]</div>";
}
// Die gezogenen Zahlen werden jeweils als div-Element in die Seite geschrieben.
// Die Gestaltung der div erfolgt im Head durch CSS
?>

</body>
</html>
