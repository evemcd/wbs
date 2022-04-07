<?php 

//Damit auch die Navi gut funktioniert, sollte die Variable page vor den header stehen
//weil auch im header.inc.php die Variable page auftaucht

//$page =  entwederDenWert ?? oderDenWert
$page = $_GET['page'] ?? '';

require_once 'inc/header.inc.php';

//die Werte der Variable page auswerten
//Variable page taucht immer in der Adresszeile auf
switch($page) {
	case 'about':	include 'inc/about.inc.php'; break;
	case 'gallery':	include 'inc/gallery.inc.php'; break;
	case 'guestbook':	include 'inc/guestbook.inc.php'; break;
	default: include 'inc/home.inc.php'; break;
}

require_once 'inc/footer.inc.php';


/*

if ( ! isset($_GET['name'])) {
    $name = 'nicht gesetzt';
}
---------------
Bessere Möglichkeit
Null coalescing operator
$name = $_GET['name'] ?? 'nicht gesetzt';

wenn Wert da dann zeigen ?? sonst Leer
#########################################
Kurzform der if-Bedingung

ternary operator: bedingter (ternärer) Operator
name = isset($_GET['name']) ? $_GET['name'] : 'nicht gesetzt';
#########################################
include
Include bindet eine angegebene Datei ein und führt sie aus.
wenn die Datei nicht da ist, dann gibt eine Meldung aus und geht weiter
------------------
require
require macht fast das gleiche wie include, wirft aber im Fehlerfall einen E_COMPILE_ERROR Fehler. 
Es beendet also die Programmausführung während include nur eine Warnung (E_WARNING) generiert und so die weitere Programmausführung gestattet. 
-------------------
require_once , include_once
entspricht im Wesentlichen require und include. 
PHP prüft hier allerdings, ob die gewünschte Datei bereits eingebunden wurde und wird sie in diesem Fall nicht ein weiteres Mal einbinden.  
*/
