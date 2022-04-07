<?php 
session_start();                                        // wenn eine Session läuft, nimmt der Browser die, ansonsten startet er eine neue
?>
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - Sessions Seite 2</h1>


<?php 
echo session_id();

echo "<br>Farbe ist ".$_SESSION["farbe"]."<br>";
echo "Tier ist ".$_SESSION["tier"];

echo "<p>Variablen werden benutzt</p>";
?>
<a href="192-sessions01.php">Zu Seite 1</a>
<a href="194-sessions03.php">Zu Seite 3</a>
<a href="195-sessions04.php">Zu Seite 4</a>
</body>
</html>
<!--
Will eine Datei auf die Werte in einem $_SESSION zugreifen, muss sie zunächst die laufende Session aufgriefen, Das geschieht ebenfalls mit session_start(). Diese Funktion muss immer in einem PHP-Block vor dem eigentöichen Dokument notiert werden. 
Einmal wiederaufgenommen, kann man die Werte, die in anderen Dateien gesetzt wurden, auslesen. 

-->