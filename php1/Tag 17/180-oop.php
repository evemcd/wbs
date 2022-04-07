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
	
	public $farbe;
	public $leistung;
	
	function __construct($F,$L){
		$this->farbe = $F;
		$this->leistung = $L;
	}

	function tuning($t){
		$this->leistung += $t;
	}

}

// Definiert eine Erweiterung zur Klasse Fahrzeug als Klasse LKW
class LKW extends Fahrzeug{
	
	public $zuladung;
	
	function __construct($F,$L,$Z){
		$this->farbe = $F;
		$this->leistung = $L;
		$this->zuladung = $Z;
	}

}



$renault = new Fahrzeug("blau",95);

echo "Der Renault ist {$renault->farbe} und hat {$renault->leistung} PS";

$scania = new LKW("orange",200,8);

$scania->tuning(50);

echo "<br>Der Scania ist {$scania->farbe}, hat {$scania->leistung} PS und eine Zuladung von {$scania->zuladung} Tonnen";

?>

</body>
</html>
<!--
Das OOP-System ist so aufgebaut, das Klassen ihre Methoden und Eigenschaften auch an andere Klassen vererben können.
Dazu müssen die zu vererbenden Methoden und Eigenschaften entweder public oder protected sein (protected bedeutet, von außen kann wie bei private nicht zugegriffen werden, eine  erbende Klasse kann das aber schon) 
Die erbende Klasse wird dann mit class NameDerKlasse extends NamederVererbendenKlasse notiert.
Die neue Klasse kann dann zusätzliche weieter Eigenschaften und Methoden defnieren, die die alten, geerbten Element ergänzen.
Wird ein identischer Bezeichner für eine neue Methode oder Eigenschaft verwendet, überschreibt diese das geerbete Element. 

Wird eine Klasse mit dem Schlüsselwort final vor class definiert, kann sie nichts weitervererben, andere Klassen können sie nicht mehr erweitern. 
-->