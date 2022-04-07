<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
    <h1>PHP - PHP HTML Preprocessor</h1>

    <?php

include("gibtesnicht.php");

echo("Ich schreib mal was");

?>

<h2>Ein Text direkt in HTML</h2>
</body>
</html>

<!-- Reine PHP-Dateien werden häufig erstelt, um in anderen PHP-Dateien als externe Dokumente eingebunden zu werden.
Dazu können die Funktionen include() und require() verwendet werden.
Diese bekommen als Wert eine Zeichenkette mit der relativen Pfadangabe zu der eizubindenden Datei angegeben. Der Code der eingebundenden Datei wird dann an genau dieser Stelle ausgeführt. -->