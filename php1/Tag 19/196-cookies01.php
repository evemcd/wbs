<?php 
$cookie_name = "Hondo";
$cookie_wert = "John Wayne";
setcookie($cookie_name,$cookie_wert,time(86400*30),"/");

?>
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - Cookies</h1>

<?php 

if(isset($_COOKIE[$cookie_name])){
    echo "Der Cookie namens $cookie_name ist vorhanden<br>";
    echo "Sein Wert ist $_COOKIE[$cookie_wert]<br>";
}else{
    echo "Der Cookie namens $cookie_name ist nicht vorhanden<br>";
}

?>
<a href="197-cookies02.php">Zu Seite 2</a>

</body>
</html>
