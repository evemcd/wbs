<?php
//die session unten sind nur zum testen
//session_start();
//$_SESSION['email'] = 'Andreas';

$page = $_GET['page'] ?? '';

require_once 'inc/header.inc.php';

switch($page) {
	case 'about':	include 'inc/about.inc.php'; break;
	case 'gallery':	include 'inc/gallery.inc.php'; break;
	case 'guestbook':	include 'inc/guestbook.inc.php'; break;
	default: include 'inc/home.inc.php'; break;
}

require_once 'inc/footer.inc.php';

