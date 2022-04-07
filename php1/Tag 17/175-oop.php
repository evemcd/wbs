<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - Objekt Orientierte Programmierung OOP</h1>

<?php 
// DEfinition der Klasse Fahrzeug
class Fahrzeug {
	
	public $farbe;
	public $leistung;
	
}

// Anlegen der konkreten Objekte die von der Klasse Fahrzeug abstammen
$renault = new Fahrzeug();
$ford = new Fahrzeug();
$opel = new Fahrzeug();

// Alle Objekte der Klasse Fahrzeug besitzen die vorgegebenen Eigenschaften
$renault->farbe = "weiss";
$renault->leistung = 165;

$opel->farbe = "rot";
$opel->leistung = 185;

// Auf die Eigenschaften der Objekte kann jederzeit zugegriffen werden
echo $renault->farbe . " " . $renault->leistung;
echo "<br>";
echo $opel->farbe . " " . $opel->leistung;


?>

</body>
</html>
<!--
Bei der Objekt Orientierten Programmierung OOP handelt es sich nicht um eine andere Sprache, es geht vielmehr um ein System, wie die benutzte Sprache verwendet wird. PHP ist bisher Prozedural verwendet worden. Das heisst, die benutzten Funktionen und Programmzeilen werden schlicht von oben nach unten verarbeitet.
Bei der OOP legt man zunächst eine KLasse an, eine Art Prototyp. In diesem wird ein Muster für Objekte defniert. Das kann wie zB hier Eigenschaften beinhalten. Eigenschfaten sind so etwas wie an ein Objekt gebundene Variablen. Jedes konkrete Objekt, das von der definierten Klasse abstammt, besitzt automatisch diese Eigenschaften. 

Eine Klasse wird mit dem Schlüsselwort class deklariert. Es folgt der Name dieser Klasse, dahinter dann Funktionklammern {}. In diesen Klammern werden alle Element hinterlegt, die zu diesem Prototypen und seinen von ihm abstammenden Objekten gehört.
Eigenschaften werden dabei vie Variablen deklariert, mit einem vorangestellten $. Davor wird aber auch noch ihre Sichtbarkeit angegeben. Mit public legt man fest, das eine Eigenschaft sowohl innerhalb des Objekts als auch von außen erreichbar ist. 

Ein konkretes Objekt legt man an, indem man einer Variablen diese Klasse mit dem Schlüsselwort new zuweisst. Ab diesem Moment befindet sich ein Objekt in der Variablen, das über alle Eigenschaften der Klasse verfügt. 
Diese Eigenschaften kann man mit Hilfe der Zeichenkombi -> benutzen. 
Die Syntax lautet dabei $variable->eigenschaft.
Bei der Eigenschaft wird kein $-Zeichen mehr angegeben. Solchen Eigenschaften kann man WErte zuweisen oder sie auslesen. 
-->