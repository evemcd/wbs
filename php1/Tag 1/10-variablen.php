<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>

</head>
<body>
    <h1>PHP - PHP HTML Preprocessor</h1>

<?php

$farbe = "orange";

echo "Lieber User, deine Lieblingsfarbe ist $farbe.<br>";
echo 'Lieber User, deine Lieblingsfarbe ist $farbe.<br>';


?>

</body>
</html>

<!-- Variablen können von PHP auch dann als solche erkannt werden, wenn sie mitten in einem String notiert werden. Dazu muss dieser String aber mit "" gebildet werden. 
Ist das der Fall, nutzt PHP den Wert aus der Variablen an dieser Stelle. Wird die Variable in einem String notiert, der mit ' ' Hochkomma gebildet wurde, erkennt PHP die Variable nicht und schreibt stattdessen ihren Namen inkl. $-Zeichen an den Platz. -->