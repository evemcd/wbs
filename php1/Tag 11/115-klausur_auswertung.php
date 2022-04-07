<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>BIG KAHUNA BURGER - Your Order</h1>

<?php 
$basis = $_POST["basis"];

switch($basis){
	case "b1":
		$gp = 6;
		$bur = "Premium Beef";
		break;
	case "b2":
		$gp = 10;
		$bur = "Wagyu Beef";
		break;
	case "b3":
		$gp = 7;
		$bur = "Chickenbreast";
		break;
	case "b4":
		$gp = 5;
		$bur = "Portobello Vegan";
		break;	
}

echo "<p>Danke für Deine Bestellung.<br>";
echo "Wir liefern Dir einen $bur Burger mit folgenden Toppings:<br>";

$toppings = array();

if( isset($_POST["cc"]) ){
	$gp += 1;
	array_push($toppings,"Cheddar-Cheese");
}
if( isset($_POST["bc"]) ){
	$gp += 2;
	array_push($toppings,"Bacon");
}
if( isset($_POST["or"]) ){
	$gp += 1.5;
	array_push($toppings,"Onion-Rings");
}
if( isset($_POST["an"]) ){
	$gp += 1.5;
	array_push($toppings,"Ananas");
}
if( isset($_POST["hs"]) ){
	$gp += 2;
	array_push($toppings,"Hot Salsa");
}
if( isset($_POST["gg"]) ){
	$gp += 1.5;
	array_push($toppings,"Gewürzgurken");
}
if( isset($_POST["jp"]) ){
	$gp += 1.5;
	array_push($toppings,"Jalapeno");
}


if(count($toppings)>0){
	echo implode(", ",$toppings);
}else{
	echo "Ohne weitere Toppings";
}


switch($_POST["side"]){
	case "s1":
		echo "<br>Als Sideorder bekommst Du Frenchfries</br>";
		break;
	case "s2":
		$gp += 1;
		echo "<br>Als Sideorder bekommst Du Sweet-Potatoe-Fries</br>";
		break;
	case "s3":
		$gp += 2;
		echo "<br>Als Sideorder bekommst Du Vegetable Fries</br>";
		break;
}


echo "<br>Dafür berechnen wir ".number_format($gp,2,",","")." Euro.</p>";

$nm = $_POST["nm"];
$ad = $_POST["ad"];
$tl = $_POST["tl"];

echo "<p>Wir liefern Deine Bestellung an $nm, $ad.<br>";
echo "Bei Fragen rufen wir Dich unter $tl zurück</p>";

if($_POST["bez"]=="bar"){
	echo "<p>Du bezahlst Bar bei Lieferung</p>";
}elseif($_POST["bez"]=="pp"){
	echo "<p>Der Betrag wird von Deinem PayPal-Konto überwiesen</p>";
}elseif($_POST["bez"]=="kk"){
	echo "<p>Der Betrag Betrag wird mit Deiner Kreditkarte beglichen</p>";
}

$datum = strftime("%H:%M:%S am %d.%m.%Y");

echo "<p>Deine Bestellung ging um $datum bei uns ein</p>";
?>


</body>
</html>
