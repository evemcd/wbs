<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>

<body>
    <h1>PHP - PHP HTML Preprocessor</h1>
    
    <?php

$a = 10;
$b = 20;

$c = $a < $b;

var_dump($c);
echo "<br>";

$c = $a > $b;

var_dump($c);
echo "<br>";

$c = $a == $b;

var_dump($c);
echo "<br>";

$c = $a != $b;

var_dump($c);
echo "<br>";

?>

</body>

</html>
<!-- Vergleichende Operatoren haben den Job, zwei Werte miteinander zu vergleichen uund je nach Operator einen Wahrheitswert zuruückzugeben.
Das Ergenis eines Vergleichs ist also immer ein Boolean mit true oder false.
Folgende Operatoren stehen zur Verfügung:
<  kleiner als
>  größer als
<= kleiner oder gleich
>= größer oder gleich
== sind gleich
!= sind nicht gleich
<> sind nicht gleich -->