<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
    <style>

<?php

echo("p {color:red;}");

?>

    </style>
</head>
<body>
    <h1>PHP - PHP HTML Preprocessor</h1>

    <?php

echo("<p>Das kommt aus PHP</p>");
echo("<p>Das ist auch aus PHP</p>");

?>

<h2>Ein Text direkt in HTML</h2>

<?php

echo("<p>Das ist dann wieder PHP</p>");

?>
</body>
</html>

<!-- Innerhalb eines Dokuments können beliebig viele PHP-Blöcke angelegt werden, auch im Wechsel etwa mir statischen HTML-Bereichen. Dabei können die Blöcke sowohl im head als auch im body liegen.
Innerhalb eines solchen Blocks können beliebig viele ANweisungszeilen notiert werden, die dann jeweils mit einem Semikolon beendet werden müssen. -->