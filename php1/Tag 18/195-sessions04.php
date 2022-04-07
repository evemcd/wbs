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
<h1>PHP - Sessions Seite 4</h1>


<?php 
echo session_id();

session_unset();
session_destroy();

echo "<p>Session wurde beendet</p>";
?>
<a href="193-sessions02.php">Zu Seite 2</a>

</body>
</html>
<!--
Mit session_unset() kann man die Fächer in dem $_SESSION komplett entfernen. 
Die Funktion session_destroy() beendet dann die Session, wobei die Session-ID dennoch weiter existiert, bis der Browser geschlossen wird. 
-->