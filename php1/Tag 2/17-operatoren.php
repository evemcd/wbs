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
$c = 4;

$d = $a + $b * $c;                  // PHP hält sich an die mathematische Rangliste (Punkt vor Strich)
echo "$a + $b * $c ergibt $d<br>";

$d = $a + $b ** $c;
echo "$a + $b ** $c ergibt $d<br>";

$d = $a * $b ** $c;
echo "$a * $b ** $c ergibt $d<br>";

$d = ($a * $b) ** $c;
echo "($a * $b) ** $c ergibt $d<br>";

?>

</body>

</html>
<!-- PHP hält sich an die grundlegenden Matheregeln, also wird Punkt- vor Strich-Rechnung ausgeführt, Exponential-Rechnung vor Punkt-Rechnung und man kann mit Klammern entsprechende Rechnungen vorziehen.
Bei gleichrangigen Operatoren wird wie in der Mathematik nach rechts gerechnet -->