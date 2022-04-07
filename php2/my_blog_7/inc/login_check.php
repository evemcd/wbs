<?php 

session_start();
require_once 'datenbank.inc.php';
require_once 'funktionen.inc.php';

$mail = bereinige($_POST['mail']);
$pwd = bereinige($_POST['pwd']);

//-------------------------------------
if( !empty($mail) && !empty($pwd) ) {
  $sql = 'SELECT * FROM users WHERE email = ?';
  $statement = $db->prepare($sql);
  $statement->execute([$mail]);
  $user = $statement->fetch();
  //prüfe, ob passwort ok------------------------
  if($user && password_verify($pwd, $user['passwort'])) {
    //$_SESSION['meldung'] = 'Alles gut';
    /*
    $_SESSION['eingeloggt'] = $user['email'];
    $_SESSION['eingeloggt_user'] = $user['name'];
    $_SESSION['id'] = $user['id'];
    //-----------------
    function loggeEin($mail, $benutzername, $id) {
      $_SESSION['eingeloggt'] = $mail;
      $_SESSION['eingeloggt_user'] = $benutzername;
      $_SESSION['id'] = $id;
    }

    */
    // Wenn ja (wenn die Daten übereinstimmen), logge den Benutzer ein
		//daten in session speichern
    loggeEin($user['email'], $user['name'], $user['id']);

    if( password_needs_rehash($user['passwort'], PASSWORD_DEFAULT) )
		 {
				// Passwort neu hashen
				//password_hash($user['passwort'], PASSWORD_DEFAULT);
			 // den alten gespeicherten Hash durch den neuen ersetzen 
			 // z.B. in der Datenbank 
			 //https://www.php.net/manual/de/function.password-needs-rehash.php
       
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