<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - Ändern eines Datensatzes - Anzeigen und bearbeiten</h1>

<form action="171-aendern03.php" method="post">

<?php 

$conn = mysqli_connect("localhost","root","","unternehmen");
$aw = $_POST["aw"];                                                                         // radio button name="aw"

$anfrage = "SELECT * FROM mitarbeiter WHERE persnr = $aw";                                  // wählt den Datensatz, wo persnr wie in $aw ist (ausgewählter Datensatz vom radio button)

//echo "$anfrage<hr>";
$res = mysqli_query($conn,$anfrage);
$dsatz = mysqli_fetch_assoc($res);                                                          // keine Schleife weil ja nur ein Wert ausgewählt ist
	
echo "<p><input type='text' value='$dsatz[nachname]' name='nn'> Nachname</p>";              // Textfelder für das Formular, zeigt die Werte aus der Datenbank an, die verändert werden können
echo "<p><input type='text' value='$dsatz[vorname]' name='vn'> Vorname</p>";
echo "<p><input type='text' value='$dsatz[abteilung]' name='ab'> Abteilung</p>";
echo "<p><input type='text' value='$dsatz[gehalt]' name='gh'> Gehalt</p>";
echo "<p><input type='text' value='$dsatz[geburtstag]' name='gb'> Geburtstag</p>";
echo "<p><input type='text' value='$dsatz[persnr]' name='pn'> Personal-Nummer</p>";         // ändert die persnr
echo "<input type='hidden' value='$dsatz[persnr]' name='oripn'>";                           // schickt die alte persnr weiter, weil die ja der identifier ist, wird versteckt, dass sie nicht verändert werden kann

?>
<p><input type="submit" value="Datensatz ändern"></p>                                       // schickt an 171.php
</form>

</body>
</html>
<!--
Nachdem der zu ändernde Datensatz ausgewählt und sein Unique-Index-Wert übertragen wurde, wird in der zweiten Datei dann mit diesem Wert genau der eine Datensatz aus der Datentabelle ausgelesen. Dessen Werte werden dann in Formularfelder geschrieben, als value. Dadurch kann der User die Werte lesen und auch bearbeiten. 
Neben den bearbeitbaren Werten wird dann der Unique-Index-Wert ein zweites Mal innerhalb des Formulars abgelegt, und zwar als verstecktes Feld. Dadurch kann der User zwar auch diesen Wert im Formular lesen und bearbeiten, er bleibt aber für die dritte Datei, die diesen Wert ebenfalls benötigt, in unveränderter Form erhalten. 

-->