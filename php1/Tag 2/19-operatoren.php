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
echo "Der aktuelle Wert ist $a<br>";

$a = $a + 5;
echo "Der aktuelle Wert ist $a<br>";

$a = $a + 5;
echo "Der aktuelle Wert ist $a<br>";

?>

</body>

</html>

<!-- Das Gleichheitszeichen = dient in PHP als Zuweisungsoperator. Es nimmt den Wert auf seiner rechten Seite und weist ihn dem Element auf seiner linken Seite zu. Das ist meist eine Variable.
Der Zuweisugsoperator steht in der Rangfolge der Operatoren ziemlich weit unten, die meisten anderen Operatoren werden vorher ausgeführt. Somit kann man dann eine Variable wie hier $a auch rechts und links vom Operator verwenden.
Steht eine Variable rechts vom Zuweisungsoperator, wird ihr bisheriger Wert verwendet. Steht eine Variable links vom Operator, bekommt sie einen neuen Wert.
Das nützt vorallem dann, wenn man den in der Variablen bereits vorhandenen Wert mit einem anderen Wert verrechnen möchte, um das Ergebnis dann auch wieder in der Variablen zu speichern. -->