<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
</head>
<body>
<h1>PHP</h1>

<?php 

$obst = array("Banane","Mandarine","Apfel","Melone","Birne");
print_r($obst);
echo "<hr>";

$raus = array_pop($obst);       // letzter Wert wird entfernt
print_r($obst);
echo "<br>Ausgeschnitten wurde: $raus";
echo "<hr>";

$zahl = array_push($obst,"Maracuja","Kiwi");        // neue Werte werden hinten eingefügt
print_r($obst);
echo "<br>Anzahl der Werte nach dem push: $zahl";
echo "<hr>";

$raus2 = array_shift($obst);        // erster Wert wird entfernt
print_r($obst);
echo "<br>Ausgeschnitten wurde: $raus2";
echo "<hr>";

$zahl = array_unshift($obst,"Orange",$raus);
print_r($obst);
echo "<br>Anzahl der Werte nach dem unshift: $zahl";

?>

</body>
</html>
<!--
Es gibt in PHP eine ganze Reihe von Funktionen, mit denen Arrays bearbeitet werden können oder die man auf ein Array anwenden kann. 
Beispielhaft hier Funktionen, mit denen dem Array am Ende oder am Anfang Werte hinzugefügt oder Fächer entfernt werden können. 
array_push() bekommt als ersten Parameter den Namen des Arrays, dem etwas hinzugefügt werden soll, als zweiten und dann beliebigen weiteren Parametern die Werte, 
die in dem Array landen sollen, und zwar am Ende. Die Funktion gibt dabei die Anzahl der Werte in dem Array nach dem push zurück.
array_pop() bekommt nur den Namen des betroffenen Arrays genannt und entfernt das letzt Fach mit seinem Wert aus dem Array. 
Den Wert gibt die Funktion zurück, so daß dieser abgefangen und weiter genutzt werden kann.
array_shift() arbeitet wie array_pop(), nur am Anfang des Arrays und die nachfolgenden Werte rutschen nach vorne.
array_unshift() arbeitet wir array_push(), ebenfalls am Anfang des Arrays, die schon vorhandenen Werte werden nach hinten verschobe. 


-->