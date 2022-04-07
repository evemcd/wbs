<?php 

session_start();

require_once 'datenbank.inc.php';
require_once 'funktionen.inc.php';

/*
Es gibt mehrere Möglichkeiten über PDO, die Daten in die DB zu speichern
1->Über die Platzhalter ?
$titel = $_POST['titel'];
$comment = $_POST['comment'];
$uid = $_POST['userid'];


if( !empty($_POST) ) {
  $sql = 'INSERT INTO guestbook(user_id, titel, post, created_at)
                          VALUES(?, ?, ?, NOW() )';
  $statement = $db->prepare($sql);
  $statement->execute([$uid, $titel, $comment]); 
  
  $_SESSION['meldung'] = 'Eintrag wurde eingefügt<br />Vielen Dank';
  redirect('../index.php?page=guestbook');
}
*/
//alle Daten vom Formular holen

/*2->Über die benannten Platzhalter
Mit benannten Platzhaltern müssen Sie PDOStatement#execute() ein assoziatives Array übergeben. Gerade wenn Daten schon in Form eines assoziativen Arrays vorliegen, ist es so nicht mehr notwendig, dieses Array zu einem numerischen umzubauen.
Ein verbreiteter Anwendungsfall sind die Formulardaten in der Superglobalen $_POST .

$_POST holt alle Daten vom Formular
z.B. $_POST['titel] => assoziatives Array
in der Abfrage steht :titel => $_POST['titel]
*/
if( !empty($_POST) ) {
  $sql = 'INSERT INTO guestbook(user_id, titel, post, created_at)
                          VALUES(:userid, :titel, :comment, NOW() )';
  $statement = $db->prepare($sql);
  $statement->execute($_POST); 
  
  $_SESSION['meldung'] = 'Eintrag wurde eingefügt<br />Vielen Dank';
  redirect('../index.php?page=guestbook');
}


