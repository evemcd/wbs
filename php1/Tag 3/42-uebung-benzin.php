<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
</head>
<body>
<h1>PHP - PHP HTML Preprocessor</h1>

<?php 

$fuel = $_POST["fuel"];
$finaltotal = 0;
$dieselprice = 1.41;
$superprice = 1.58;
$e10price = 1.56;
$amount = $_POST["amount"];

switch($fuel){
    case "diesel":
        $finaltotal = number_format(($amount * $dieselprice),2,",",".");
        echo "<p>Diesel kostet $dieselprice Euro pro Liter. $amount Liter kosten $finaltotal Euro</p>";
        break;
    case "super":
        $finaltotal = number_format(($amount * $superprice),2,",",".");
        echo "<p>Super kostet $superprice Euro pro Liter. $amount Liter kosten $finaltotal Euro</p>";
    break;
    case "e10":
        $finaltotal = number_format(($amount * $e10price),2,",",".");
        echo "<p>E10 kostet $e10price Euro pro Liter. $amount Liter kosten $finaltotal Euro</p>";
    break;
}

?>

</body>
</html>