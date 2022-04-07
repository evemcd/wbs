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
	
	// Eigenschaften
	public $farbe;
	public $leistung;
	
	// Methoden
	function tuning($T){
		$this->leistung += $T;
	}
	
	function ausgeben(){
		return "Das Fahrzeug ist ".$this->farbe." und hat ".$this->leistung."PS";
	}

	// Konstruktor
	function __construct($F,$L){
		$this->farbe = $F;
		$this->leistung = $L;
	}

}

// Anlegen des konkreten Objekts mit Argumeneten, die vom Konstrktor übernommen werden. 
$renault = new Fahrzeug("blau",95);

// Methoden der Klasse werden vom konkreten Objekt verwendet
$renault->tuning(20);
echo $renault->ausgeben();
?>

</body>
</html>
<!--
Man kann für eine Klasse auch eine Konstruktor Funktion definieren. Diese Funktion muss und kann nicht direkt vom Code aus aufgerufen werden. Sie wird vielmehr automatisch beim Anlegen eines konkreten Objekts von dieser Klasse ausgeführt. Deshalb ist ihr Name mit __construct (zwei Unterstriche!!) auch festgelegt.
Mit dieser Funktion lasssen sich Argumenet, die beim Anlegen des Objekts in den Parameterklammern notiert wurden, dann sofort auslesen und zB auf die Eigenschaften des jeweiligen Objekts verteilen. 

-->