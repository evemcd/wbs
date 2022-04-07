<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>

<body>
    <h1>PHP - PHP HTML Preprocessor</h1>
    
    <?php

$a = 20;
echo "Der aktuelle Wert ist $a<br>";

$a += 5;
echo "Der aktuelle Wert ist $a<br>";

$a *= 5;
echo "Der aktuelle Wert ist $a<br>";

$a %= 5;
echo "Der aktuelle Wert ist $a<br>";

$a **= 5;
echo "Der aktuelle Wert ist $a<br>";

?>

</body>

</html>

<!-- Neben dem normalen Zuweisungsoperator gibt es auch Kombi-Operatoren, die Zuweisung und Rechnugn kombinieren.
+= nimmt den Wert auf seiner rechten Seite, addiert ihn auf den Wert in der Variablen, die links von ihm steht, drauf und speichert das Ergebnis auch direkt in der Variablen.
Dadurch muss die Variable nur einmal notiert und somit auch nur einmal auf sie zugegriffen werden.
Diese Kombination gibt es für alle Rechenarten. -->