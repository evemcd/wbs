<?php

function formatiereDatum($dbDatum, $format = '%A, %d.%B.%Y %H:%M:%S') {
  return strftime($format, strtotime($dbDatum));
}

function bereinige($userEingabe, $encoding = 'UTF-8') {
  return htmlspecialchars( 
                        strip_tags( trim($userEingabe) ), 
                        ENT_QUOTES | ENT_HTML5, 
                        $encoding );
}


function redirect($url) {
  header('Location: '.$url);
  exit;
}

//wenn sich ein User erfolgreich anmeldet
//dann werden bestimmte Daten in session gespeichert
//mail und id sind eindeutig...könnte man für Abfragen benutzen
//über den Namen, den User begrüßen
function loggeEin($mail, $benutzername, $id) {
  $_SESSION['eingeloggt'] = $mail;
  $_SESSION['eingeloggt_user'] = $benutzername;
  $_SESSION['id'] = $id;
}

//hier werden alle sessionVariablen vom User wieder geleert
function loggeAus() {
  //ein einzelnes Element mit unset() leeren 
  unset($_SESSION['eingeloggt']);
  unset($_SESSION['eingeloggt_user']);
  unset($_SESSION['id']);
}

/*
https://www.php.net/manual/de/function.htmlspecialchars.php

 htmlspecialchars(
    string $string,
    int $flags = ENT_COMPAT,
    ?string $encoding = null,
    bool $double_encode = true
): string

ENT_QUOTES 	Konvertiert sowohl doppelte als auch einfache Anführungszeichen.
ENT_HTML5 	Behandle Code als HTML 5. 
----------------------------------
strip_tags()
strip_tags — Entfernt HTML- und PHP-Tags aus einem String

strip_tags('userEingabe', '<p><a>');  //hier sind p und a erlaubt
------
Diese Funktion sollte nicht verwendet werden, um zu versuchen XSS-Attacken zu verhindern. 
Statt dessen sind geeignetere Funktionen wie htmlspecialchars() oder andere Mittel, abhängig vom Ausgabekontext, zu verwenden. 

*/
