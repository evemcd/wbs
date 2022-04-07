<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - Suchformular Gehalt</h1>

<form action="159-suche3_auswertung.php" method="POST">

<p><select name="a">

<?php 

$conn = mysqli_connect("localhost","root","","unternehmen");

$anfrage = "SELECT DISTINCT abteilung FROM mitarbeiter ORDER BY abteilung";

$resultat = mysqli_query($conn,$anfrage);

while($dsatz = mysqli_fetch_assoc($resultat)){
	echo "<option>$dsatz[abteilung]</option>";
}

?>

</select></p>

<p><input type="submit" value="Abteilungssuche"></p>

</form>

</body>
</html>
<!--
Nicht immer wird PHP und die Datenbank nur für Auswertungsdateien verwendet. Auch in einem Formular kann der ZUgriff auf die Datenbank und die Nutzung von PHP zur Erzeugung von Formularfeldern oder dem Platzieren von Werten in Formularfeldern sinnvoll sein. 
Hier wurden die Werte aus der Spalte abteilung in der Datentabelle mitarbeiter ausgelesen, dabei mit DISTINCT doppelte Nennungen ausgeschlossen und mit ORDER BY das Ergebnis sortiert. 
PHP erzeugt dann aus diesen Werten mit einer while-Schleife die options für ein select-Menue. 
Dadurch findet man beim Aufrufen des Formulars alle in der Datenbank genannten Abteilungen, immer aktuell. 
-->