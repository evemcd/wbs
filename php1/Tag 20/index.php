<!DOCTYPE html>
<html>
<head>
<title>PHP Aufbau Klausur</title>
<meta charset="utf-8">
<script>
function checker(){
	return window.confirm("Möchten Sie den Datensatz wirklich löschen?");
}
</script>
</head>
<body>
<h1>PHP - Übersicht</h1>
<a href="index.php">Seite aktualisieren</a>



<!-- Übersicht -->
<h3>Übersicht</h3>
<?php 
$conn = mysqli_connect("localhost","root","","buchladen");

$anfrage = "SELECT * FROM buecher";
$resultat = mysqli_query($conn,$anfrage);

echo "<table border='1'>";
while($dsatz=mysqli_fetch_assoc($resultat)){
	echo "<tr>";
	echo "<td>$dsatz[titel]</td>";
	echo "<td>$dsatz[autor]</td>";
	echo "<td>$dsatz[verlag]</td>";
	echo "<td>$dsatz[preis]</td>";
	echo "<td>$dsatz[et]</td>";
	echo "<td>$dsatz[genre]</td>";
	echo "<td>$dsatz[isbn]</td>";
	echo "</tr>";
}
echo "</table>";
?>

<hr>





<!-- Titel Suche -->
<h3>Suche</h3>

<?php
$conn = mysqli_connect("localhost","root","","buchladen");

if(isset($_POST["titel"])){
$titel = $_POST["titel"];
$anfrage = "SELECT * FROM buecher WHERE titel LIKE '%$titel%'";
$resultat = mysqli_query($conn,$anfrage);
}

if(isset($_POST["titelsearch"])){
echo "<table border='1'>";
while($dsatz=mysqli_fetch_assoc($resultat)){
	echo "<tr>";
	echo "<td>$dsatz[titel]</td>";
	echo "<td>$dsatz[autor]</td>";
	echo "<td>$dsatz[verlag]</td>";
	echo "<td>$dsatz[preis]</td>";
	echo "<td>$dsatz[et]</td>";
	echo "<td>$dsatz[genre]</td>";
	echo "<td>$dsatz[isbn]</td>";
	echo "</tr>";
}
echo "</table>";
}
?>

<form action="" method="POST">
<input type="text" name="titel">
<input type="submit" value="Buch suchen" name="titelsearch">
</form>
<br>





<!-- Autor Suche -->
<?php
$conn = mysqli_connect("localhost","root","","buchladen");

if(isset($_POST["autor"])){
$autor = $_POST["autor"];
$anfrage = "SELECT * FROM buecher WHERE autor LIKE '%$autor%'";
$resultat = mysqli_query($conn,$anfrage);
}

if(isset($_POST["autorsearch"])){
echo "<table border='1'>";
while($dsatz=mysqli_fetch_assoc($resultat)){
	echo "<tr>";
	echo "<td>$dsatz[titel]</td>";
	echo "<td>$dsatz[autor]</td>";
	echo "<td>$dsatz[verlag]</td>";
	echo "<td>$dsatz[preis]</td>";
	echo "<td>$dsatz[et]</td>";
	echo "<td>$dsatz[genre]</td>";
	echo "<td>$dsatz[isbn]</td>";
	echo "</tr>";
}
echo "</table>";
}

?>

<form action="" method="POST">
<input type="text" name="autor">
<input type="submit" value="Autor suchen" name="autorsearch">
</form>





<!-- Genre Suche -->
<?php
$conn = mysqli_connect("localhost","root","","buchladen");
if(isset($_POST["genre"])){
	$genre = $_POST["genre"];
	$anfrage = "SELECT * FROM buecher WHERE genre LIKE '$genre'";
	$resultat = mysqli_query($conn,$anfrage);
	}

if(isset($_POST["genresearch"]) && mysqli_num_rows($resultat)>0){
	echo "<table border='1'>";
while($dsatz=mysqli_fetch_assoc($resultat)){
	echo "<tr>";
	echo "<td>$dsatz[titel]</td>";
	echo "<td>$dsatz[autor]</td>";
	echo "<td>$dsatz[verlag]</td>";
	echo "<td>$dsatz[preis]</td>";
	echo "<td>$dsatz[et]</td>";
	echo "<td>$dsatz[genre]</td>";
	echo "<td>$dsatz[isbn]</td>";
	echo "</tr>";
}
echo "</table>";
}
?>

<form action="" method="POST">
<p><select name="genre">
<?php 
$conn = mysqli_connect("localhost","root","","buchladen");
$anfrage = "SELECT DISTINCT genre FROM buecher ORDER BY genre";
$resultat = mysqli_query($conn,$anfrage);
while($dsatz = mysqli_fetch_assoc($resultat)){
	echo "<option>$dsatz[genre]</option>";
}
?>
</select>
<input type="submit" value="Genre suchen" name="genresearch"></p>
</form>

<hr>





<!-- Daten einfügen -->
<h3>Daten einfügen</h3>
<?php 
if(isset($_POST["sender"])){
$ti = $_POST["ti"];
$au = $_POST["au"];
$ve = $_POST["ve"];
$pr = $_POST["pr"];
$et = $_POST["et"];
$ge = $_POST["ge"];
$isbn = $_POST["isbn"];

$conn = mysqli_connect("localhost","root","","buchladen");
$anfrage = "INSERT INTO buecher (titel,autor,verlag,preis,et,genre,isbn) VALUES ('$ti','$au','$ve',$pr,'$et','$ge','$isbn')";
$resultat = mysqli_query($conn,$anfrage);

if($resultat){
    echo "<h3 style='color:green;'>Der Datensatz wurde erfolgreich eingetragen.</h3>";
}else{
    echo "<h3 style='color:red;'>Der Datensatz konnte nicht eingetragen werden.</h3>";
}
}
?>
<form action="" method="POST">
<p><input type="text" name="ti"> Titel</p>
<p><input type="text" name="au"> Autor</p>
<p><input type="text" name="ve"> Verlag</p>
<p><input type="text" name="pr"> Preis</p>
<p><input type="text" name="et"> Erscheinungstermin (JJJJ-MM-TT)</p>
<p><input type="text" name="ge"> Genre</p>
<p><input type="text" name="isbn"> ISBN</p>
<p><input type="submit" value="Datensatz eintragen" name="sender"></p>
<p><input type="reset" value="zurücksetzen"></p>

<hr>





<!-- Daten ändern Teil 1-->
<h3>Daten ändern</h3>
<form action="" method="POST">

<?php 
$conn = mysqli_connect("localhost","root","","buchladen");
$anfrage = "SELECT * FROM buecher";
$resultat = mysqli_query($conn,$anfrage);

echo "<table border='1'>";
while($dsatz = mysqli_fetch_assoc($resultat)){
	echo "<tr>";
	echo "<td>$dsatz[titel]</td>";
	echo "<td>$dsatz[autor]</td>";
	echo "<td>$dsatz[verlag]</td>";
	echo "<td>$dsatz[preis]</td>";
	echo "<td>$dsatz[et]</td>";
	echo "<td>$dsatz[genre]</td>";
	echo "<td>$dsatz[isbn]</td>";
	echo "<td><input type='radio' name='aw' value='$dsatz[isbn]' checked></td>";
	echo "</tr>";
}
echo "</table>";
?>
<p><input type="submit" value="Datensatz auswählen" name="changer"></p>
</form>





<!-- Daten ändern Teil 2-->
<form action="" method="POST">

<?php 
if(isset($_POST["changer"])){
$conn = mysqli_connect("localhost","root","","buchladen");
$aw = $_POST["aw"];
$anfrage = "SELECT * FROM buecher WHERE isbn = '$aw'";
$resultat = mysqli_query($conn,$anfrage);
$dsatz = mysqli_fetch_assoc($resultat);
	
echo "<p><input type='text' value='$dsatz[titel]' name='tit'> Titel</p>";
echo "<p><input type='text' value='$dsatz[autor]' name='aut'> Autor</p>";
echo "<p><input type='text' value='$dsatz[verlag]' name='ver'> Verlag</p>";
echo "<p><input type='text' value='$dsatz[preis]' name='pre'> Preis</p>";
echo "<p><input type='text' value='$dsatz[et]' name='et1'> Erscheinungstermin (JJJJ-MM-TT)</p>";
echo "<p><input type='text' value='$dsatz[genre]' name='gen'> Genre</p>";
echo "<p><input type='text' value='$dsatz[isbn]' name='isbn'> ISBN</p>";
echo "<input type='hidden' value='$dsatz[isbn]' name='oisbn'>";
echo "<p><input type='submit' value='Datensatz ändern' name='changer1'</p>";
}
?>
</form>





<!-- Daten ändern Teil 3-->
<?php 
$conn = mysqli_connect("localhost","root","","buchladen");
if(isset($_POST["changer1"])){
$tit = $_POST["tit"];
$aut = $_POST["aut"];
$ver = $_POST["ver"];
$pre = $_POST["pre"];
$et1 = $_POST["et1"];
$gen = $_POST["gen"];
$isbn = $_POST["isbn"];
$oisbn = $_POST["oisbn"];

$anfrage = "UPDATE buecher SET titel='$tit',autor='$aut',verlag='$ver',preis=$pre,et='$et1',genre='$gen',isbn='$isbn' WHERE isbn = '$oisbn'";
// echo "$anfrage<hr>";
$resultat = mysqli_query($conn,$anfrage);
$anz = mysqli_affected_rows($conn);

if($resultat){
	echo "<h3 style='color:green;'>Es wurde $anz Datensatz erfolgreich geändert</h3>";
}else{
	echo "<h3 style='color:red;'>Die Datensätze wurden nicht geändert: ".mysqli_error($conn)."</h3>";
}
}
?>
<a href="index.php">Seite aktualisieren</a>

<hr>





<!-- Daten löschen Teil 1 -->
<h3>Daten löschen</h3>
<form action="" method="Post" onsubmit="return checker();">

<?php 
$conn = mysqli_connect("localhost","root","","buchladen");
$anfrage = "SELECT * FROM buecher";
$resultat = mysqli_query($conn,$anfrage);

echo "<table border='1'>";
while($dsatz = mysqli_fetch_assoc($resultat)){
	echo "<tr>";
	echo "<td>$dsatz[titel]</td>";
	echo "<td>$dsatz[autor]</td>";
	echo "<td>$dsatz[verlag]</td>";
	echo "<td>$dsatz[preis]</td>";
	echo "<td>$dsatz[et]</td>";
	echo "<td>$dsatz[genre]</td>";
	echo "<td>$dsatz[isbn]</td>";
	echo "<td><input type='radio' name='aw1' value='$dsatz[isbn]' checked></td>";
	echo "</tr>";
}
echo "</table>";
?>
<p><input type="submit" value="Datensatz löschen" name="eraser"></p>





<!-- Daten löschen Teil 2 -->
<?php 
$conn = mysqli_connect("localhost","root","","buchladen");
if(isset($_POST["eraser"])){
$aw1 = $_POST["aw1"];
$anfrage = "DELETE FROM buecher WHERE isbn = '$aw1'";
$resultat = mysqli_query($conn,$anfrage);

if($resultat){
	echo "<h3 style='color:green;'>Der Datensatz wurde gelöscht</h3>";
}else{
	echo "<h3 style='color:red;'>Der Datensatz wurde nicht gelöscht.</h3>";
}
}
?>
<a href="index.php">Seite aktualisieren</a>


</form>
</body>
</html>