<?php
session_start();

//damit z.B. Datum in deutsch angezeigt wird
setlocale(LC_ALL, "de_DE", "deu_deu","german");
//DatenbankVerbindung einbinden
require_once 'inc/datenbank.inc.php';
require_once 'inc/funktionen.inc.php';

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

switch($page) {
	case 'about':	include 'inc/about.inc.php'; break;
	case 'gallery':	include 'inc/gallery.inc.php'; break;
	case 'guestbook':	include 'inc/guestbook.inc.php'; break;
	case 'neu':	include 'inc/register_form.inc.php'; break;
	case 'profil':	include 'inc/profil.inc.php'; break;
	default: include 'inc/home.inc.php'; break;
}

require_once 'inc/footer.inc.php';


