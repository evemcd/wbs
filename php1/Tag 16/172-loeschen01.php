<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

<script>

function checker(){
	return window.confirm("Möchten Sie den Datensatz wirklich löschen?");
}

</script>

</head>
<body>
<h1>PHP - Löschen eines Datensatzes - Auswahl</h1>

<form action="173-loeschen02.php" method="post" onsubmit="return checker();">					// bestätigen oder abbrechen onsubmit

<?php 

$conn = mysqli_connect("localhost","root","","unternehmen");
$anfrage = "SELECT * FROM mitarbeiter";
$res = mysqli_query($conn,$anfrage);

echo "<table border='1'>";

while($dsatz = mysqli_fetch_assoc($res)){
	echo "<tr>";
	echo "<td>$dsatz[nachname]</td>";
	echo "<td>$dsatz[vorname]</td>";
	echo "<td>$dsatz[abteilung]</td>";
	echo "<td>$dsatz[gehalt]</td>";
	echo "<td>$dsatz[geburtstag]</td>";
	echo "<td>$dsatz[persnr]</td>";
	echo "<td><input type='radio' name='aw' value='$dsatz[persnr]' checked></td>";
	echo "</tr>";
}

echo "</table>";

?>
<p><input type="submit" value="Datensatz löschen"></p>
</form>

</body>
</html>
<!--
Auch für den Löschvorgang ist es notwendig, zunächst den zu löschenden Datensatz auszuwählen. 
Dies geschieht auf die exakt gleiche Weise wie beim Ändern, mit einer erzeugten Radiobutton-Gruppe.
Der eigentlich Löschvorgang wird dann auf der nächsten Seite ausgeführt. 

Hier wurde zusätzlich ein Javascript eingefügt, mit dem der User noch einmal gefragt wird, ob er den Löschvorgang tatsächlich durchführen möchte. Ein entsprechnder script-Block mit einer Funktion befindet sich im Head des Dokuments, der Funktionaufruf wurde mit dem EreignisAttribut onsubmit dem form-Tag hinzugefügt. 
-->