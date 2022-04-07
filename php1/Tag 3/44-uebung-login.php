<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
</head>
<body>
<h1>PHP</h1>

<?php 

$username = $_POST["username"];
$password = $_POST["password"];

if($username == "emcdermo" && $password == "!Password123"){
    echo "<p>There are ways to win this, hidden all around you.</p>";
}else{
    echo "<p>Game over!</p>";
}

?>

</body>
</html>