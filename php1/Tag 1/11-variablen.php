<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>

</head>
<body>
    <h1>PHP - PHP HTML Preprocessor</h1>

<?php

$a;
// Undefined; Datentyp:NULL
var_dump($a);

$a = "Hallo";
// Zeichenkette; Datentyp:STRING
echo "<hr>$a<br>";
var_dump($a);

$a = "Buxtehude";
// Neue Zeichenkette; Datentyp:STRING
echo "<hr>$a<br>";
var_dump($a);

$a = 42;
// Ganze Zahl; Datentyp:INT (=Integer)
echo "<hr>$a<br>";
var_dump($a);

$a = 17.42434;
// Kommazahl (mit .); Datentyp:FLOAT
echo "<hr>$a<br>";
var_dump($a);

$a = true; 
// Wahrheitswert (true oder false); Datentyp:BOOL (=Boolean)
echo "<hr>$a<br>";
var_dump($a);

$a = false;
// Wahrheitswert (true oder false); Datentyp:BOOL (=Boolean)
echo "<hr>$a<br>";
var_dump($a);

$a = array("Orange", "Zitrone", "Banane");
// Array, Speicherfeld; Datentyp:ARRAY
echo "<hr>$a<br>";
var_dump($a);

?>

</body>
</html>

<!-- Variablen sind in PHP nicht an einen bestimmten Datentyp gebunden. Ein Datentyp gibt an, um welche Art von Wert es sich handelt, und das entscheidet, was man dann mit einem bestimmten Wert machen kann.
Man kann also in PHP einer Variablen einen Wert zuweisen, die Variable übernimmt dann den Datentyp des Wertes. Später kann man dieser Variablen jederzeit einen neuen Wert zuweisen. 
Hat dieser neue Wert den gleichen Datentyp wie der alte, behält die Variable diesen Typ. 
Hat der Wert aber einen anderen Datentyp, so übernimmt die Variable den neuen Datentyp und vergisst mit dem alten Wert auch den alten Datentyp. -->