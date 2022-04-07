<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>

</head>
<body>
    <h1>PHP - PHP HTML Preprocessor</h1>

<?php

$txt = "Hallo Welt, heute startet eine neue Woche mit einem neuen Kurs<br>";

echo $txt;
echo $txt;
echo $txt;

echo $TXT; 
#case sensitive

?>

</body>
</html>

<!-- Wie alle Script-Sprachen nutzt auch PHP Variablen, um Werte zu speichern.
Dazu wird zunächst eine Variable erschaffen, in dem man einen beliebigen Namen/Bezeichner hinter einem Dollar-Zeichen $ notiert.
Dabei gilt, dass in diesem Namen kein Umlaut, kein Leerzeichen, kein Sonderzeichen außer dem Unterstrich _ verwendet wird und dass Ziffern nicht als erstes Zeichen verwendet werden dürfen.
Außerdem sollten PHP-Bezeichner für Funktionen und Schlüsselwörter vermieden werden (also kein $echo etc).
Eine Variable wird dann konkret, wenn ihr mit dem Gleichheitszeichen = ein Wert zugewiesen wird. Das Zeichen wird hier deshalb als Zuweisungsoperator bezeichnet.
Hat eine Variable erst einmal einen Wert, wird dieser Wert immer wieder benutzt, wenn man die Variable einsetzt. 
Hier etwa wird die Variable mittels echo in die Seite geschrieben, also wird der Wert in der Variablen ins Dokument geschrieben.

Anders als die anderen Elemente in PHP sind Variablen-Namen case-sensitive. $txt ist also eine andere Variable als etwa $TXT oder $tXt. -->