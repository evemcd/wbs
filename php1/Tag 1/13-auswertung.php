<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
    <h1>PHP - PHP HTML Preprocessor</h1>
    <h2>Die Auswertung</h2>

<?php
$eintrag = $_POST["vn"];
// der Wert aus dem feld vn vom Formular wird über die Superglobale $_POST in die Variable $eintrag geschoben

echo "<h3>Herzlich Willkommen, $eintrag</h3>";
?>
    
</body>
</html>

<!-- Mit Hilfe einer Super-Globalen wird in der PHP-Datei auf die Werte aus dem Formular zugegriffen.
Dabei wird bei Übertragung via POST dann $_POST[] verwendet, bei GET entsprechend $_GET[].
In den eckigen Klammern wird der Name des Feldes, das man auslesen möchte, als String notiert. 
So hat man dann Zugriff auf diesen Wert, den man dann wie hier z.B. einer Variablen zur weiteren Verarbeitung zuweisen kann. -->