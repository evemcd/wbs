<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - Ändern eines Datensatzes - Auswahl</h1>

<form action="170-aendern02.php" method="post">													// form um den php block

<?php 

$conn = mysqli_connect("localhost","root","","unternehmen");

$anfrage = "SELECT * FROM mitarbeiter";

$res = mysqli_query($conn,$anfrage);

echo "<table border='1'>";

while($dsatz = mysqli_fetch_assoc($res)){														// fetches a result row as an associative array
	echo "<tr>";
	echo "<td>$dsatz[nachname]</td>";															// $dsatz[nachname] ist die Beschriftung
	echo "<td>$dsatz[vorname]</td>";
	echo "<td>$dsatz[abteilung]</td>";
	echo "<td>$dsatz[gehalt]</td>";
	echo "<td>$dsatz[geburtstag]</td>";
	echo "<td>$dsatz[persnr]</td>";
	echo "<td><input type='radio' name='aw' value='$dsatz[persnr]' checked></td>";				//radio button: name gruppiert, value braucht eindeutig identifizierbare werte, z.b. persnr (unique)
	echo "</tr>";
}

echo "</table>";

?>
<p><input type="submit" value="Datensatz auswählen"></p>										// wird an 170.php gesendet
</form>

</body>
</html>
<!--
Um einen Datensatz aus der GRuppe aller Datensätze auszuwählen, muss dieser Datensatz in einem Formular dargestellt werden. Dazu werden alle Datensätze angezeigt und für jeden Datensatz wird ein Radiobutton erzeugt. Dieser Radiobutton bekommt als Value den Wert, mit dem ein Datensatz einzigartig identifiziert werden kann. 
In diesem Beispiel ist das die Spalte persnr, die auch den Unique-Index in der Datentabelle hat. 
Der Rest des Datensatzes dient dann mehr der Beschriftung. 
-->