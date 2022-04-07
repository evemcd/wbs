<?php
session_start();

//damit z.B. Datum in deutsch angezeigt wird
setlocale(LC_ALL, "de_DE", "deu_deu","german");
//DatenbankVerbindung einbinden
require_once 'inc/datenbank.inc.php';
require_once 'inc/funktionen.inc.php';

/*
Eine Cross-Site-Request-Forgery (abgekürzt CSRF oder XSRF) beschreibt das Unterschieben eines 
ungewollten Websiteaufrufs durch einen Angreifer. 
*/
if( !isset($_SESSION['token']) ) {
	$_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(32));
}
//Meldung anzeigen sofern vorhanden
if(isset($_SESSION['meldung'])) {
	// Meldung in einer Variablen ablegen (wird über dem Loginformular angezeigt)
	$meldung = $_SESSION['meldung'];
	// Meldung aus der Session löschen, da diese nur 1x angezeigt werden soll
  //flush messages
	unset($_SESSION['meldung']);
}



$page = $_GET['page'] ?? '';

require_once 'inc/header.inc.php';

//--------------------------
/*
//uniqid — Erzeugt eine eindeutige ID
//uniqid ( string $prefix = "" , bool $more_entropy = false ) : string
//Bei leerem prefix ist die zurückgegebene Zeichenkette 13 Zeichen lang. 
//Falls more_entropy true ist, sind es 23 Zeichen.
//https://www.php.net/manual/de/function.uniqid.php
echo uniqid('',true);

echo '<br />+++++++++++++++<br />';
//rand — Erzeugt eine zufällige Zahl
echo rand();

echo '<br />+++++++++++++++<br />';
echo rand(1,10);

echo '<br />+++++++++++++++<br />';
//getrandmax — Liefert die größtmögliche Zufallszahl
echo getrandmax();
echo '<br />+++++++++++++++<br />';
echo rand(1000, getrandmax());

echo '<br />+++++++++++++++<br />';
//openssl_random_pseudo_bytes — Generate a pseudo-random string of bytes
//Erzeuge eine pseudo-zufällige Zeichenfolge von Bytes
//Ein Byte besteht aus einer Folge von acht einzelnen Bits
echo openssl_random_pseudo_bytes(32);

echo '<br />+++++++++++++++<br />';
//bin2hex — Wandelt Binär-Daten in ihre hexadezimale Entsprechung um
//Gibt einen ASCII-String zurück, der die hexadezimale Wiedergabe des Parameters string enthält. 
//Die Umwandlung geschieht byteweise mit dem höchsten Anteil (4 Bit, "high-nibble") zuerst.
echo bin2hex (openssl_random_pseudo_bytes(32));
*/
//--------------------------

switch($page) {
	case 'about':	include 'inc/about.inc.php'; break;
	case 'gallery':	include 'inc/gallery.inc.php'; break;
	case 'guestbook':	include 'inc/guestbook.inc.php'; break;
	case 'neu':	include 'inc/register_form.inc.php'; break;
	case 'profil':	include 'inc/profil.inc.php'; break;
	default: include 'inc/home.inc.php'; break;
}

require_once 'inc/footer.inc.php';


