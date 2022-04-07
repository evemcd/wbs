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
	function zuweiser($F,$L){
		$this->farbe = $F;
		$this->leistung = $L;
	}
	
	function tuning($T){
		$this->leistung += $T;
	}
	
	function ausgeben(){
		return "Das Fahrzeug ist ".$this->farbe." und hat ".$this->leistung."PS";
	}
	
}

// Anlegen der konkreten Objekte die von der Klasse Fahrzeug abstammen
$renault = new Fahrzeug();


// Methoden der Klasse werden vom konkreten Objekt verwendet
$renault->zuweiser("weiss",165);

$renault->tuning(20);

echo $renault->ausgeben();


?>

</body>
</html>
<!--
Neben Eigenschaften, die man für ein Objekt bestimmen kann, gibt es auch die Möglichkeit, Methoden anzugeben. Methoden sind nichts an deres als selnstdefinierte Funktionen innerhalb der Klasse, die dann von den konkreten Objekten verwendet werden können. DIese Methoden können dann dabei auch auf die deklarierten Eigenschaften des Objekts zugreifen. 
Dazu wird in der Funktion ein Platzhalter für das später produzierte Objekt verwendet, $this. 
$this ist ein vorgegebener Begriff und ersetzt den Bezeichner des später ausserhalb angelegten Objekts. 
-->