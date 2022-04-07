<?php

session_start();
//die Datei einbinden, wo die Verbindung zu DB steht
require_once 'datenbank.inc.php';
require_once 'funktionen.inc.php';

//auf die Werte der Felder in form zugreifen
// name="nn", name="mail", usw...
$nn = bereinige($_POST['nn']);
$mail = bereinige($_POST['mail']);
$pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);


$motto = bereinige($_POST['motto']) ?? '';
$ueber = bereinige($_POST['ueber']) ?? '';

//++++++++++++++++++++++++++++++++++++++++++++++++++++
//erstmal prüfen, ob die E-Mail schon in der DB existiert?
$mailEindeutig = 'SELECT * FROM users WHERE email = ?';
$statement = $db->prepare($mailEindeutig);
$statement->execute([$mail]);
$user = $statement->fetch();

if(!($user))
{
  //E-Mail ist eindeutig, insert soll gehen
  //E-Mail existiert nicht ei 2. mal
  $sql = 'INSERT INTO users(name,email,passwort,motto,ueber_mich,created_at) 
                      VALUES(?,?,?,?,?, NOW())';
  $statement = $db->prepare($sql);
  $statement->execute([$nn,$mail,$pwd,$motto,$ueber]);
  

  $_SESSION['meldung'] = 'Registrierung erfolgreich, Bitte sich einloggen.';
  //header('Location: ../index.php');
  redirect('../index.php');
} 
else {
  //E-Mail existiert schon, kein insert
  $_SESSION['meldung'] = 'Die E-Mail existiert!<br />Bitte andere E-Mail eingeben';
  //header('Location: ../index.php?page=neu');
  redirect('../index.php?page=neu');
}

/*
Prepared Statements

Sie unterscheiden sich von normalen SQL-Abfragen darin, dass sie das Definieren
des SQLs und die Ausführung in zwei Schritte aufteilen.

Zuerst wird mit der Methode PDO#prepare() das SQL festgelegt. 

Diese Methode liefert Ihnen das bereits bekannte PDOStatement -Objekt zurück. 
Danach wird das SQL mit der Methode PDOStatement#execute() ausgeführt. 
Jetzt fragen Sie sich vielleicht, worin der Vorteil liegt, eine Anweisung durch zwei zu ersetzen. 

Der Vorteil von Prepared Statements liegt darin, dass in ihnen Platzhalter ( ? ) verwendet werden können, die Sie erst beim PDOStatement#execute() mit Werten befüllen. 
Diese Werte werden der Methode als Parameter in Form eines Arrays übergeben.
----------------------
PDO und Sicherheit

Unter dem Begriff SQL-Injection versteht man das unerlaubte Einschleusen von SQL-Anweisungen in
Ihren Code durch einen Besucher Ihrer Webseite. Im schlimmsten Fall kann so ein Benutzer beliebiges
SQL (z.B. DELETE FROM , UPDATE , ...) auf Ihrem Server ausführen. Erschreckenderweise ist das leichter,
als Sie vermutlich denken.

Jetzt kommt die gute Nachricht: 
Solange Sie Prepared Statementsmit Platzhaltern verwenden, müssen Sie sich um solche SQL-Injections keine Sorgen machen. 
Sämtliche potenziell gefährlichen Anweisungen in Platzhaltern werden automatisch maskiert und sind somit ungefährlich. 
Jegliche Verkettung von Benutzereingaben im SQL-Code macht Ihre Abfragen jedoch für SQL-Injections anfällig, selbst wenn Sie PDOStatement#prepare() und PDOStatement#execute() zur Ausführung des SQLs verwenden.
Dies sollten Sie somit unbedingt vermeiden.
-----------------------
Prepared Statements schützen Ihre Anwendung gegen SQL-Injections - und nur dagegen!
*/
