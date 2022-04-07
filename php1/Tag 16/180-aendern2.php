<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - Ändern eines Datensatzes - Anzeigen und bearbeiten</h1>

<form action="181-aendern3.php" method="post">

<?php 

$conn = mysqli_connect("localhost","root","","kino");
$aw = $_POST["aw"];

$anfrage = "SELECT * FROM filme WHERE id = $aw";

//echo "$anfrage<hr>";
$res = mysqli_query($conn,$anfrage);
$dsatz = mysqli_fetch_assoc($res);
	
echo "<p><input type='text' value='$dsatz[titel]' name='tt'> Titel</p>";
echo "<p><input type='text' value='$dsatz[otitel]' name='ot'> Originaltitel</p>";
echo "<p><input type='text' value='$dsatz[dauer]' name='da'> Dauer</p>";
echo "<p><input type='text' value='$dsatz[jahr]' name='ja'> Jahr</p>";
echo "<p><input type='text' value='$dsatz[regie]' name='re'> Regie</p>";
echo "<p><input type='text' value='$dsatz[musik]' name='mu'> Musik</p>";
echo "<p><input type='text' value='$dsatz[genre]' name='ge'> Genre</p>";
echo "<p><input type='text' value='$dsatz[id]' name='id'> ID</p>";
echo "<input type='hidden' value='$dsatz[id]' name='oid'>";

?>
<p><input type="submit" value="Datensatz ändern"></p>
</form>

</body>
</html>