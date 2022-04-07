<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
</head>
<body>
<h1>PHP</h1>

<?php 

for($i=1;$i<=5;$i++){

    echo "Hallo";
}

?>

</body>
</html>
<!-- Immer dann, wenn ein Programm ganz oder teilweise wiederholt ausgeführt werden soll, verwendet man in der Programmierung eine Schleife. So auch in PHP.
Der erste Schleifentyp ist die for-Schleife. Sie ist sehr strukturiert und benötigt exakte Angaben, um zu steuern, wie oft sie die ANweisugen in ihren Funktionsklammern wiederholen. Dafür werden in ihren Parameterklammern drei Vorgaben gemacht:
1. Initialisierung (hier $i=1) - Es wird eine Zählvariable definiert und mit einem Startwert ausgestattet. Dieser Wert verändert sich bei jedem Durchlauf und wird ebenso kontrolliert.
2. Bedingung (hier $i<=5) - Der Zähler wird mit einem Zielwert verglichen. Solange dieser Vergleich ein true ergibt, führt die Schleife weitere Durchläufe durch. Sobakd hier ein false herauskommt, endet die Schleife.
3. Inkrementierung (hier $i++) - Der Zähler wird nach Ausführung der Anweisungen verändert, wobei diese Veränderung dafür sorgen muss, dass der Zähler sich dem Zielwert annähert. Ansonsten könnte eine Endlos-Schleife entstehen. -->