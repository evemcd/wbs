<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
</head>
<body>
<h1>PHP</h1>

<?php 

$obst = array("Banane","Mandarine","Apfel");

$obst2 = ["Kirsche","Orangee","Birne"];

print_r($obst);

echo "<br>";

print_r($obst2);

?>

</body>
</html>
<!--
Arrays sind Speicherfelder, in denen logisch-inhaltlich zusammengehörende Werte unter einem Bezeichner, in einer Variable abgelegt werden können. 
So bekommt man einfachen Zugriff auf gleich mehrere Werte, die man dann gemeinsam bearbeiten und verwenden kann. 
Arrays können auf verschiedene Arten und Weisen erstellt werden, meist wird entweder die Funktion array() verwendet und die Werte, die in das Array sollen werden als Parameterwerte notiert. 
Oder aber man nutzt eckige KLammern [], um die Werte zusammenzufassen, bevor sie mit dem Zuweinsungsoperator einer Variablen zugewiesen werden. 

Arrays können nicht direkt als string ausgegeben werden, deshalb wird hier die Funktion print_r() genutzt, um eine einfach Ausgabe zu erzeugen. 
-->