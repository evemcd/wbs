<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>

<body>
    <h1>PHP - PHP HTML Preprocessor</h1>
    
    <?php

$a = 20;

if($a>15){
echo "<p>Der Wert in der Variablen a ist gr¿ßer als 15</p>";
}

?>

</body>

</html>
<!-- Vergleichsoperationen bilden die Basis für bedingte Anweisungen. Diese führen die ihr gesammelten Anweisungen eben nur dann aus, wenn zuvor eine Bedingung erfüllt ist, eine Vergleiochsoperation ein true ergeben hat. 
Bei einem false-Ergebnis werden die Anweisungen einfach nicht ausgeführt. 
Die bedingte Anweisung wird mit dem Schlüsselwort if eingeleitet. In den Parameterklammern () folgen dann die Bedingungen, in den darauf folgenden Funktionklammern {} werden dann alle Anweisungen gesammelt, die an diese Bedingung geknüpft sind. Sollte es nur eine einzelne Anweisungszeile sein, kann man die Funktionklammern auch weglassen. -->