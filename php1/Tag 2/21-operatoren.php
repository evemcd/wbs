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

$a += 1;
echo "Der aktuelle Wert ist $a<br>";

$a ++;          // Inkrement
echo "Der aktuelle Wert ist $a<br>";

$a --;          // Dekrement
echo "Der aktuelle Wert ist $a<br>";

$b = 10;

echo $b;
echo "<br>";
echo $b++;          // Post-Fix-Inkrement erst schreiben, dann rechnen und in Zeile 31 Ergebnis ausspucken
echo "<br>";
echo $b;
echo "<br>";
echo ++$b;          // Pre-Fix-Inkrement erst rechnen dann Ergebnis ausspucken

?>

</body>

</html>

<!-- Nutzt man eine Variable zB zum mitzählen, wird ihr Wert zumeist um 1 erhöht oder verringert.
Dazu kann man den Inkrement-Operator ++ oder eben den Dekrement-Operator -- verwenden. 
Dabei ist dann die Veränderung um 1 impliziert.
Wird diese Operation dann in einer Anweisungszeile mit weiteren Funktionen verwendet, kann es noch von Bedeutung sein, ob der Operator vor oder hinter der Variablen notiert wird.
Beim Post-Fix wird er dahinter notiert, was dazu führt, dass zunächst der Wert der Variablen von der Funktion verwendet wird und erst danach die Erhöhung/Verringerung um 1 stattfindet.
Beim Pre-Fix wird er davor notiert und hier wird dann erst erhöht/verringert, bevor die Funktion den Wert der Variablen verwendet. -->

