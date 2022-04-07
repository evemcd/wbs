<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>

</head>
<body>
    <h1>PHP - PHP HTML Preprocessor</h1>

    <?php

echo("<p>Das kommt aus PHP - mit echo</p>");
print("<p>Das kommt aus PHP - mit print</p>");

echo "<p>Das kommt aus PHP - mit echo, ohne Klammern</p>";
print "<p>Das kommt aus PHP - mit print, ohne Klammern</p>";

?>

</body>
</html>

<!-- Neben echo kann auch die Funktion print verwendet werden, um einen Wert ins Dokument zu schreiben. Dabei kann man bei beiden Funktionen die Parameterklammern () auch schlicht weglassen und nur ein Leerzeichen zwischen Funktionsname und Wert setzen.
Der Unterschied zwischen beiden Funktionen ist minimal, so gibt print die Zahl 1 zurück, wenn sie ausgeführt wird, was echo nicht tut.
echo kann dafür, wenn keine Klammern gesetzt wurden, durch Komma getrennt, mehrere Werte hintereinander ins Dokument schreiben, print kann das nicht.
Außerdem ist echo minimal schneller als print. -->