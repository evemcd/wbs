<?php

session_start();

//DatenbankVerbindung einbinden
if(isset($_SESSION['meldung'])) {
	$meldung = $_SESSION['meldung'];
	//flush messages
	unset($meldung);
}

$page = $_GET['page'] ?? '';

require_once 'inc/header.inc.php';

switch($page) {
	case 'about':	include 'inc/about.inc.php'; break;
	case 'gallery':	include 'inc/gallery.inc.php'; break;
	case 'guestbook':	include 'inc/guestbook.inc.php'; break;
	case 'neu': include 'inc/register_form.inc.php'; break;
	default: include 'inc/home.inc.php'; break;
}

require_once 'inc/footer.inc.php';

