<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP</h1>

<?php 

$servername = "localhost";
$benutzername = "root";
$passwort = "";
$datenbank = "unternehmen";
$conn = mysqli_connect($servername,$benutzername,$passwort,$datenbank);

$anfrage = "SELECT * FROM kunden";
$resultat = mysqli_query($conn,$anfrage);

$anzahl = mysqli_num_rows($resultat);										// liest die Anzahl der Listen-Elemente in der DB aus
echo "Anzahl der Kunden: $anzahl<hr>";

$dsatz = mysqli_fetch_assoc($resultat);										// 
print_r($dsatz);															// schreibt den array
echo "<hr>";

foreach($dsatz as $schluessel => $wert){									// ändert den array key in die Variable $schluessel und den array value in die Variable $wert
	echo "$schluessel: $wert<br>";											// schreibt den ersten Datensatz aus. Wenn die foreach Schleife wiederholt wird, wird der zweite Datensatz ausgeschrieben
}
echo "<hr>";

// for($i=1;$i<=mysqli_num_rows($resultat);$i++){								// läuft durch alle Datensätze durch
// 	$dsatz1 = mysqli_fetch_assoc($resultat);
// 	foreach($dsatz1 as $schluessel => $wert){
// 		echo "$schluessel: $wert<br>";
// 	}
// }
// echo "<hr>";

while($dsatz2=mysqli_fetch_assoc($resultat)){
	echo "Bei $dsatz2[name] ist der Ansprechpartner $dsatz2[ansprechpartner]<br>";
	echo "Die Adresse ist $dsatz2[adresse], $dsatz2[stadt], $dsatz2[land]<br>";
	echo "$dsatz2[ansprechpartner] ist zu erreichen unter $dsatz2[telefon]<br>";
	echo "<br>";
}

echo "<table border='1'>";
while($dsatz=mysqli_fetch_assoc($resultat)){
	echo "<tr>";
	echo "<td>$dsatz[name]</td>";
	echo "<td>$dsatz[ansprechpartner]</td>";
	echo "<td>$dsatz[land]</td>";
	echo "<td>$dsatz[stadt]</td>";
	echo "<td>$dsatz[adresse]</td>";
	echo "<td>$dsatz[telefon]</td>";
	echo "<td>$dsatz[abnahmemenge_monat]</td>";
	echo "<td>$dsatz[kdnr]</td>";
	echo "</tr>";
}
echo "</table>";
echo "<hr>";
?>

</body>
</html>
<!--
Häufig ist gerade bei Datensätzen das Ausgeben der gefundnen Werte in einer Tabelle die übersichtlichste Variante.
Dazu wird in der Schleife jeweils eine Zeile erzeugt, in der dann jeder Wert in einer Zelle platziert wird. Um die Schleife herum kommt dann der table-Befehl.
-->