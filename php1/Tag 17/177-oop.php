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
	private $leistung;
	
	// Methoden
	function zuweiser($F,$L){
		$this->farbe = $F;
		$this->leistung = $L;
	}
	
	function tuning($T){
		$this->leistung += $T;
		$this->farbaenderung("schwarz");
	}
	
	function ausgeben(){
		return "Das Fahrzeug ist ".$this->farbe." und hat ".$this->leistung."PS";
	}
	
	private function farbaenderung($C){
		$this->farbe = $C;
	}
	
	
}

// Anlegen der konkreten Objekte die von der Klasse Fahrzeug abstammen
$renault = new Fahrzeug();


// Methoden der Klasse werden vom konkreten Objekt verwendet
$renault->zuweiser("weiss",165);

$renault->tuning(20);

echo $renault->ausgeben();


echo "<hr>";

echo "Zugriff auf die Eigenschaft Farbe: ".$renault->farbe."<br>";

//echo "Zugriff auf die Eigenschaft Leistung: ".$renault->leistung."<br>";

$renault->farbaenderung("rot");

?>

</body>
</html>
<!--
Innerhalb von Klassen kann der Zugriff auf Eigenschaften und Methoden von Außen gesteuert werden. Mit public vor der angegebenen Eigenschaft wird bestimmt, das diese Eigenschaft öffentlich ist, man also sowohl innerhalb der Klasse als auch außerhalb im sonstigen Code auf diese Eigenschaft zugreifen kann. Bei Methoden muss das public nicht explizit genannt werden, es wird vorausgesetzt. Man kann aber auch sowohl Eigenscjaften wie auch Methoden private setzen. Dann können diese nur innerhalb der Klasse verwendet werden, ein Zugriff von außen, aus dem normalen Code heraus ist dann nocht mehr möglich. Hier kann dann Information verborgen werden, Daten werden gekapselt. 


-->