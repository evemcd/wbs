<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
    <h1>PHP - PHP HTML Preprocessor</h1>

    <?php

require("gibtesnicht.php");
# spuckt einen fatalen Fehler aus und macht hinterher nicht weiter.

echo("Ich schreib mal was");

?>

<h2>Ein Text direkt in HTML</h2>
</body>
</html>

<!-- Verwendet man require zum Einbinden und ist das externe Dokument nicht da, so wirkt sich das viel stärker aus. 
Denn dann beendet PHP die weitere Verarbeitung der Seite, da man ja mit require angegeben hat, dass dieses Dokument entsprechend notwendig ist. -->