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
$b = "5";

$d = $a + $b;
echo "$a + $b ergibt $d<br>";

$b = "5.5";
$d = $a + $b;
echo "$a + $b ergibt $d<br>";

$b = "5 Meter";
$d = $a + $b;
echo "$a + $b ergibt $d<br>";

$b = "5 Meter 50";
$d = $a + $b;
echo "$a + $b ergibt $d<br>";

$b = "Das sind 5 Meter";
$d = $a + $b;
echo "$a + $b ergibt $d<br>";

?>

</body>

</html>

<!-- PHP kann mthematische Operatoren auch auf Strings anwenden. Voraussetzung ist dabei, dass sich in diesem String verwendbare Zahlenwerte befinden.
Besteht dieser String nur aus Ziffern und, im Falle einer Kommazahl, aus einem Dezimalpunkt, rechnet PHP mit diesen Strings ohne weitere Probleme.
Befinden sich weitere Zeichen, die nicht als Zahl gedeutet werden können in dem String, bemüht PHP sich, zumindest einen Teil zu nutzen, gibt aber auch Warnmeldungen aus.
PHP rechnet dann dabei mit allen Zahlenwerten, die am Anfang des Strings liegen. Weiter hinten platzierte Werte werden ignoriert. -->