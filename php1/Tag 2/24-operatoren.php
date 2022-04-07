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

$c = $a == $b;

var_dump($c);
echo "<br>";

$b = "10";

$c = $a == $b;          // einfache Gleichheit, nur Zeichen müssen für true übereinstimmen

var_dump($c);
echo "<br>";

$c = $a === $b;         // absolute Gleichheit, Zeichen UND Datentyp müssen für true übereinstimmen

var_dump($c);
echo "<br>";

$c = $a !== $b;         // absolute Ungleichheit, Zeichen ODER/UND Datentyp müssen für true unterschiedlich sein

var_dump($c);
echo "<br>";



?>

</body>

</html>
<!-- Manchmal reicht die Überprüfung auf einfache (Un-)Gleichheit nicht aus. Denn manchmal muss auch der Datentyp mit in die Überprüfung einbezogen werden. Dann kann man mit === auf absolute Gleichheit und mit !== auf absolute Ungleichheit prüfen. -->