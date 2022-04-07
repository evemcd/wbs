<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - Pizzabestellung</h1>

<?php 
$basis = $_POST["basis"];

switch($basis){
	case "p1":
		$gp = 5;
		$piz = "kleine Pizza";
		break;
	case "p2":
		$gp = 7;
		$piz = "mittlere Pizza";
		break;
	case "p3":
		$gp = 11;
		$piz = "große Pizza";
		break;
}

echo "<p>Danke für Deine Bestellung.<br>";
echo "Wir liefern Dir eine $piz mit folgenden Zutaten:<br>";

$zutaten = array();

if( isset($_POST["sala"]) ){
	$gp += 2;
	array_push($zutaten,"Salami");
}
if( isset($_POST["schi"]) ){
	$gp += 3;
	array_push($zutaten,"Schinken");
}
if( isset($_POST["zwie"]) ){
	$gp += 1;
	array_push($zutaten,"Zwiebeln");
}
if( isset($_POST["thun"]) ){
	$gp += 3;
	array_push($zutaten,"Thunfisch");
}
if( isset($_POST["spin"]) ){
	$gp += 2;
	array_push($zutaten,"Spinat");
}

if(count($zutaten)>0){
	echo implode(", ",$zutaten);
}else{
	echo "Ohne weitere Zutaten";
}

echo "<br>Dafür berechnen wir $gp Euro.</p>";

$nm = $_POST["nm"];
$ad = $_POST["ad"];
$tl = $_POST["tl"];

echo "<p>Wir liefern Deine Pizza an $nm, $ad.<br>";
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
