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
$b = 10;

$c = $a <=> $b;

var_dump($c);
echo "<br>";

$a = 20;

$c = $a <=> $b;

var_dump($c);
echo "<br>";

$a = 5;

$c = $a <=> $b;

var_dump($c);
echo "<br>";

?>

</body>

</html>
<!-- Der Spaceship-Operator <=> gibt keinen Boolean zurück, sondern einen Zahlenwert. Ist der linke Wert größer als der rechte, wird 1 zurückgegeben, ist der rechte größer -1 und sind beide Werte gleich einen 0. -->