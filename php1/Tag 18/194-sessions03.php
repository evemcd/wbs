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
<h1>PHP - Sessions Seite 3</h1>


<?php 
echo session_id();

$_SESSION["farbe"] = "Rot";
$_SESSION["tier"] = "Wolf";

echo "<p>Variablen sind geändert</p>";
?>

<a href="193-sessions02.php">Zu Seite 2</a>

</body>
</html>
<!--
Die Werte in den $_SESSION-Fächern sind nicht fix, wie bei einer Variablen kann man ihnen stets neue Werte zuweisen. 
-->