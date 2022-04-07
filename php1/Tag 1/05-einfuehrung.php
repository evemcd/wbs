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
#spuckt Fehlermeldung aus, aber macht hinterher weiter

echo("Ich schreib mal was");

?>

<h2>Ein Text direkt in HTML</h2>
</body>
</html>

<!-- Die beiden Funktionen require und include unterscheiden sich in dem Moment, wenn die eingebundene externe Datei nicht vorhanden ist. 
Nutzt man dann include, bekommt man zwar einen Warnhinweis, aber der Rest des Dokuments wird weiter verarbeitet, als ob es kein Problem wäre. -->