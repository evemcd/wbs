<?php 

session_start();
require_once 'datenbank.inc.php';
require_once 'funktionen.inc.php';

$mail = bereinige($_POST['mail']);
$pwd = bereinige($_POST['pwd']);

//-------------------------------------
// Prüfe Benutzer auf Übereinstimmung der übergebenen Daten
//if( !empty($mail) && !empty($pwd))
if( !empty($_POST) && $_POST['csrf_token'] === $_SESSION['token'] ) {
  $sql = 'SELECT * FROM users WHERE email = ?';
  $statement = $db->prepare($sql);
  $statement->execute([$mail]);
  $user = $statement->fetch();
  //prüfe, ob passwort ok------------------------
  if($user && password_verify($pwd, $user['passwort'])) {
		//daten in session speichern
    loggeEin($user['email'], $user['name'], $user['id']);

    if( password_needs_rehash($user['passwort'], PASSWORD_DEFAULT) )
		 {

       // Falls ja, dann erzeuge einen neuen Hash und ersetze den alten
			 $neu = password_hash($pwd, PASSWORD_DEFAULT);
       //if($neu) $_SESSION['meldung'] = 'Passwort neu gesetzt';
		 }

  }
  else {
    $_SESSION['meldung'] = 'Falsche Logindaten';
  }
  //---------------------------------------------
} else {
  $_SESSION['meldung'] = 'Felder dürfen nicht leer sein';
}
redirect('../index.php');