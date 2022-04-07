<?php

$optionen = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
];
$db = new PDO('mysql:host=localhost;dbname=myblog_webdev10','root','');

$db->query('SET NAMES utf8');


/*
PDO-Attribute
Die Datenbank-Verbindung, also das PDO -Objekt, kann mit verschiedenen Attributen an Ihre speziellen
Bedürfnisse angepasst werden.

Der Name eines solchen Attributs wird komplett in Großbuchstaben geschrieben und besteht aus dem
Präfix PDO , zwei Doppelpunkten :: und dem eigentlichen Namen, z.B. ATTR_ERRMODE . Der vollständige Name lautet also PDO::ATTR_ERRMODE .
---------------------------------------------
Fehlerverhalten einstellen (PDO::ATTR_ERRMODE)

Wann immer Sie eine fehlerhafte SQL-Anweisung abschicken, meldet MySQL einen Fehler. Dieser wird
jedoch standardmäßig von PDO nicht angezeigt. 

Das ist an sich vollkommen in Ordnung. 
Während Sie jedoch die Webseite entwickeln, benötigen Sie möglichst viele Informationen über alle Probleme in
Ihrer Programmierung. Daher macht es Sinn, die MySQL-Fehlermeldungen standardmäßig anzuzeigen.
Dieses Verhalten können Sie über das Attribut PDO::ATTR_ERRMODE beeinflussen.

Es sind drei Einstellungen möglich:

➤ PDO::ERRMODE_SILENT : Dies ist der Standardfall. PDO reicht keine Fehlermeldungen von MySQL
weiter. Wenn Sie die Meldungen sehen wollen, müssen Sie sie von Hand über die Methode
PDO#errorInfo() ausgeben.
➤ PDO::ERRMODE_WARNING : Ist diese Einstellung aktiv, wird von PDO jedesmal eine PHP-Warnung
erzeugt, wenn MySQL einen Fehler meldet. Das PHP-Skript selbst läuft weiter, nur die Meldung wird
im Browser angezeigt.
➤ PDO::ERRMODE_EXCEPTION : Ist PDO::ERRMODE_EXCEPTION gesetzt, wird das Skript sofort mit
einem PHP-Fehler abgebrochen.
---------------------------------------------
Unicode-konforme Tabellen erzeugen

Um in einer MySQL-Tabelle Unicode-Daten speichern zu können, müssen Sie beim Erzeugen der Tabelle
den gewünschten Zeichensatz angeben. Hinter die schließende runde Klammer von CREATE TABLE
können Sie die Einstellung DEFAULT CHARSET schreiben, um die Tabelle auf den gewünschten Zeichensatz umzustellen.

Um MySQL wirklich auf Unicode umzustellen, können Sie entweder die Server-Konfiguration umschreiben, oder nach dem Verbindungsaufbau explizit Unicode verlangen. 

Über die SQL-Anweisung SET NAMES können Sie MySQL mitteilen, dass alle Eingaben von nun an in
dem gewünschten Zeichensatz kommen und auch der Server alle Daten in diesem Zeichensatz ausliefern soll.
*/



