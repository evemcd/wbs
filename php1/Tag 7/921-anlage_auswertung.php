<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - Anlage - Auswertung</h1>

<?php 

$betrag = $_POST["betrag"];
$dauer = $_POST["dauer"];

echo "<p>Sie möchten $betrag Euro über $dauer Jahre anlegen<br>";

if($dauer<=3){
	$zinssatz = 2;
}elseif($dauer<=5){
	$zinssatz = 3;
}elseif($dauer<10){
	$zinssatz = 4;
}else{
	$zinssatz = 5;
}

echo "Dafür bieten wir einen Zinssatz von $zinssatz Prozent an</p>";


echo "<table border='1'>";
echo "<tr><th>Jahr</th><th>Zinsen</th><th>Gesamt</th></tr>";

for($i=1;$i<=$dauer;$i++){

echo "<tr>";

echo "<td>$i</td>";

$zinsen = $betrag / 100 * $zinssatz;

echo "<td>".number_format($zinsen,2,",",".")."</td>";

$betrag += $zinsen;

echo "<td>".number_format($betrag,2,",",".")."</td>";

echo "</tr>";

}

echo "</table>";

?>



</body>
</html>
