<?php
session_start();
require_once 'datenbank.inc.php';
require_once 'funktionen.inc.php';

$mail = bereinige($_POST['mail']);
$pwd = bereinige($_POST['pwd']);

if(!empty($mail) && !empty($pwd)) {
    $sql = 'SELECT * FROM users WHERE email = ?';
    $statement = $db->prepare($sql);
    $statement->execute([$mail]);
    $user = $statement->fetch();
    //prüfe ob Passwort ok
    if($user && password_verify($pwd, $user['passwort'])) {
    $_SESSION['meldung'] = 'Alles gut';
    // password_needs_rehash($pwd, PASSWORD_DEFAULT);
    } else {
    $_SESSION['meldung'] = 'Falsche Logindaten';
    }
} else {
    $_SESSION['meldung'] = 'Felder dürfen nicht leer sein';
}
redirect('../index.php');

?>