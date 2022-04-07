<?php
session_start();
require_once 'datenbank.inc.php';
require_once 'funktionen.inc.php';

if(!empty($_POST)) {
    $sql = 'INSERT INTO guestbook(user_id, titel, post, created_at)
                            VALUES(:userid, :titel, :comment, NOW())';
    $statement = $db->prepare($sql);
    $statement->execute($_POST);

    $_SESSION['meldung'] = 'Eintrag wurde eingefügt.<br>Vielen Dank!';
    redirect('../index.php?page=guestbook');
}
?>