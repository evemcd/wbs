<?php 

session_start();
require_once 'datenbank.inc.php';
require_once 'funktionen.inc.php';

$nn = bereinige($_POST['nn']);
$mail = bereinige($_POST['mail']);

//password_hash('hallo', PASSWORD_DEFAULT)
$pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);

$motto = bereinige($_POST['motto']) ?? ' ';
$ueber = bereinige($_POST['ueber']) ?? ' ';

//============================================================
//existiert email schon?
$mailEindeutig = 'SELECT * FROM users WHERE email = ?';                 // wegen pdo kommt platzhalter ?
$statement = $db->prepare($mailEindeutig);
$statement->execute([$mail]);
$user = $statement->fetch();

if(!$user) {
    //Email war eindeutig, insert soll gehen
    $sql = 'INSERT INTO users(name,email,password,motto,ueber_mich,created_at)
                        VALUES(?,?,?,?,?, NOW())';
    $statement = $db->prepare($sql);
    $statement->execute([$nn,$mail,$pwd,$motto,$ueber]);
    $_SESSION['meldung'] = 'Registrierung erfolgreich, bitte einloggen';
    redirect('../index.php');
}
else {
    $_SESSION['meldung'] = 'Die E-Mail existiert.<br>Bitte andere E-Mail eingeben';
    redirect('../index.php?page=neu');

}



?>