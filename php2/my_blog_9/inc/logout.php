<?php

session_start();
require_once 'funktionen.inc.php';

//Sessions beenden
//ein einzelnes Element mit unset() löschen (die Funktion loggeAus() steht in funktionen.inc.php)
loggeAus();
$_SESSION['meldung'] = 'Sie sind abgemeldet.';

//Weiterleitung zu index.php
redirect('../index.php');
session_destroy();