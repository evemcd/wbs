<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - Sessions Seite 1</h1>


<?php 
echo session_id();

$_SESSION["farbe"] = "Blau";
$_SESSION["tier"] = "Hund";

echo "<p>Variablen sind gesetzt</p>";
?>

<a href="193-sessions02.php">Zu Seite 2</a>

</body>
</html>
<!--
Sessions sind Sitzungen, die von PHP mittels der Funktion session_start() eingeleietet werden können. 
Dabei wird dem Browser eine Session-Id zugewiesen, die gültig ist, bis der Btowser geschlossen wird. 
Wurde eine Session eröffnet, hat PHP Zugriff auf die Superglobale $_SESSION. 
Diese kann wie ein Assozitives Werte Werte und frei formulierbaren Bezeichner speichern. 
Jede weitere Datei, die dann später diese laufenede Session aufgreift, kann auf diese Werte zugreifen.


-->