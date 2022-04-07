<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Big Kahuna Burger Bestellung</title>
</head>
<body>
    <h1>Ihre Bestellung</h1>

<?php

$burger = $_POST["burger"];
$extras = array();
$side = $_POST["side"];
$name = $_POST["name"];
$adresse = $_POST["adresse"];
$tel = $_POST["tel"];
$pay = $_POST["pay"];

switch($burger){
	case "b0":
		$gp = 6;
		$burg = "Premium Beef Burger";
		break;
	case "b1":
		$gp = 10;
		$burg = "Wagyu Beef Burger";
		break;
	case "b2":
		$gp = 7;
		$burg = "Chicken Breast Burger";
		break;
    case "b3":
        $gp = 5;
        $burg = "Portobello Vegan Burger";
        break;
}

echo "<p>Danke für Ihre Bestellung<br>";
echo "Sie bekommen einen $burg mit ";

if(isset($_POST["cheese"])){
    $gp += 1;
    array_push($extras,"Cheddar-Cheese");
}
if(isset($_POST["bacon"])){
    $gp += 2;
    array_push($extras,"Bacon");
}
if(isset($_POST["onion"])){
    $gp += 1.5;
    array_push($extras,"Onion-Rings");
}
if(isset($_POST["ananas"])){
    $gp += 1.5;
    array_push($extras,"Ananas");
}
if(isset($_POST["salsa"])){
    $gp += 2;
    array_push($extras,"Hot Salsa");
}
if(isset($_POST["gurke"])){
    $gp += 1.5;
    array_push($extras,"Gewürzgurken");
}
if(isset($_POST["jala"])){
    $gp += 1.5;
    array_push($extras,"Jalapenos");
}
if(count($extras)>0){
    echo implode(", ",$extras);
}else{
    echo "nix";
}

if($side == "s0"){
    $gp += 0;
    $si = "French Fries";
}
if($side == "s1"){
    $gp += 1;
    $si = "Sweet-Potato-Fries";
}
if($side == "s2"){
    $gp += 2;
    $si = "Vegetable Fries";
}

$form_price = number_format($gp,2,",",".");

echo "<br>Dazu gibt es $si.<br>";
echo "Der Gesamtpreis ist $form_price&euro;.<br>";
echo "Wir liefern an $name. Die Adresse lautet $adresse. Bei Rückfragen kontaktieren wir Sie unter $tel.<br>";

if($pay == "p0"){
    echo "Sie zahlen bar bei Lieferung.";
}
if($pay == "p1"){
    echo "Sie zahlen per Kreditkarte.";
}
if($pay == "p2"){
    echo "Sie bezahlen mit PayPal.";
}

echo "<br>Zeit der Bestellung: ";
echo strftime("%H:%M:%S");
echo "</p>";

?>
    
</body>
</html>