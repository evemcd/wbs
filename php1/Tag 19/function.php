<?php $servername = "localhost"; $username = "root"; $passwort = ""; $datenbank = "chat"; $port = 3306;  // Var für Datenbankverbindung $conn = "";  // Öffnen der Datenbankverbindung function connectToDB() {    global $servername, $username, $passwort, $datenbank, $conn, $port;      $conn = new mysqli ($servername, $username, $passwort, $datenbank, $port);        if ($conn->connect_error) {           echo "Verbindung nicht möglich";          return false;     }     else {         return true;     } }    // Schließen der Datenbankverbindung function closeDB() {     global $conn;     if($conn) {         if($conn->close()) {             return true;         } else {             return false;         }      } }       ?>