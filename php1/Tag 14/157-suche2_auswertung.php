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

$gh = $_POST["gh"];

// SQL Anweisung wird soweit formuliert, wie sie in allen Versioen gleich ist
$anfrage = "SELECT * FROM mitarbeiter WHERE gehalt ";

// Wert aus den Radiobuttons wird verwendet um jeweils einen anderen Wert an die SQL-Anweisung zu hängen
switch($gh){
	case "s1":
		$anfrage .= "< 3700";
		break;
	case "s2":
		$anfrage .= "BETWEEN 3700 AND 4000";
		break;
	case "s3":
		$anfrage .= "> 4000";
		break;
}

// Nachdem die Anweisung komplett ist, wird sie an die Datenbank gesendet
$resultat = mysqli_query($conn,$anfrage);

// Tabelle wird nur ausgegeben wenn in $resultat min. ein Datensatz vorhanden ist
if(mysqli_num_rows($resultat)>0){		

echo "<table border='1'>";

while($dsatz=mysqli_fetch_assoc($resultat)){
	
	echo "<tr>";
	echo "<td>$dsatz[nachname]</td>";
	echo "<td>$dsatz[vorname]</td>";
	echo "<td>$dsatz[persnr]</td>";
	echo "<td>$dsatz[abteilung]</td>";
	echo "<td>$dsatz[gehalt]</td>";
	echo "<td>$dsatz[geburtstag]</td>";
	echo "</tr>";

}

echo "</table>";
}else{
	echo "<p>Es wurde kein passender Datensatz gefunden</p>";
}
?>

</body>
</html>
<!--
Ja nach Formular oder Abfrage-Typ kann es sein, das sich auch der Operator ändert. 
Dann muss die SQL-Anweisung entsprechend teilweise anders formuliert sein. Eine Möglichkeit dazu ist ein switch, das den String, in dem sich die Anweisung befindet, die aber nich nicht komplett ist, dann durch anhängen des restlichen Teil-Strings komplettiert, bevor diese Anfrage dann gesendet wird. 

-->