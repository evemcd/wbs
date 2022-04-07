<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>

<body>
    <h1>PHP - PHP HTML Preprocessor</h1>
    
    <?php

$a = 12;
$b = 5;

$c = $a + $b;                   // Addition
echo "$a + $b ergibt $c<br>";

$c = $a - $b;                   // Subtraktion
echo "$a - $b ergibt $c<br>";

$c = $a * $b;                   // Multiplikation
echo "$a * $b ergibt $c<br>";

$c = $a / $b;                   // Division
echo "$a / $b ergibt $c<br>";

$c = $a % $b;                   // Restwertberechnung /5 Rest 2 (Modulo)
echo "$a % $b ergibt $c<br>";

$c = $a ** $b;                   // Exponentialrechnung (12 hoch 5)
echo "$a ** $b ergibt $c<br>";

?>

</body>

</html>

<!-- PHP beherrscht die kassischen Grundrechenarten, hinzu kommt dann noch mit Moduo die Restwertberechnung und die Exponentialrechnung.  -->