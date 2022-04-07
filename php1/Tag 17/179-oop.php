<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>PHP - Objekt Orientierte Programmierung OOP</h1>

<?php 
// Definition der Klasse Fahrzeug
class Fahrzeug {
	
	// Eigenschaften
	public $farbe;
	public $leistung;
	
	// Methoden
	function tuning($T){
		$this->leistung += $T;
	}
	
	// Destruktor
	function __destruct(){
		echo "<p>Das Fahrzeug ist ".$this->farbe." und hat ".$this->leistung." PS</p>";
	}

	// Konstruktor
	function __construct($F,$L){
		$this->farbe = $F;
		$this->leistung = $L;
	}

}


$renault = new Fahrzeug("blau",95);
$opel = new Fahrzeug("rot",125);
$audi = new Fahrzeug("silber",185);

?>

</body>
</html>
<!--
PHP kennt in der OOP auch eine Destruktor Funktion. Auch diese wird wie der Konstruktor automatisch ausgeführt und muss nicht über einen extra Aufruf ausgelöst werden. Die Funktion wird dabei mit dem Namen __destruct() notiert und wird ausgeführt, sobald das PHP Script in diesem Dokument beendet wird.  
Durch geschicktes anwenden von Konstruktor und Destruktor lässt sich die Menge an PHP-Codezeilen drastisch reduzieren, was dann automatisch zu einer schnelleren Execution-Speed führt. 
-->