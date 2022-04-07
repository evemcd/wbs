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

$vorname = $_POST["vn"];
$nachname = $_POST["nn"];
$strasse = $_POST["str"];
$plz = $_POST["plz"];
$ort = $_POST["ort"];
$tag = $_POST["tag"];
$monat = $_POST["monat"];
$jahr = $_POST["jahr"];
$geburtstag = $_POST["tag"].".".$_POST["monat"].".".$_POST["jahr"];


echo "<p>Hallo $vorname!<br></>";
echo "<p>Ich sehe, dein Nachname ist $nachname.<br></p>";
echo "<p>Ich komme dich mal in der $strasse besuchen.<br></p>";
echo "<p>Das Navi bringt mich bestimmt nach $plz $ort.</p>";
echo "<p>Dein Geburtstag ist am $tag.$monat.$jahr :)</p>";
echo "<p>Dein Geburtstag ist am $geburtstag.</p>";

var_dump($vorname);
var_dump($nachname);
var_dump($strasse);
var_dump($plz);
var_dump($ort);
var_dump($tag);
var_dump($monat);
var_dump($jahr);
var_dump($geburtstag);

?>
    
</body>
</html>