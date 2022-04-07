<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>

<body>
    <h1>PHP - PHP HTML Preprocessor</h1>
    
    <?php

$a = "Hallo";
$b = "Welt";

$c = $a . $b;

echo $c;
echo "<br>";

$c = $a . " " . $b;

echo $c;
echo "<br>";

$c .= " Heute ist Dienstag";

echo $c;
?>

</body>

</html>

<!-- Das Punktsymbol . dient in PHP als Zeichenketten-Operator. Damit wird der String rechts voom Symbol an den String links vom Symbol angehängt.
Auch als Kombioperator .= kann man dann damit einen String an den Wert in einer Variablen hinten anhängen und das Ergebnis auch direkt darin speichern. -->