<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
<style>



</style>
</head>
<body>
<h1></h1>

<?php 

$background = array(rand(0,255), rand(0,255), rand(0,255));
$textcolor = array(rand(0,255), rand(0,255), rand(0,255));
$pictures = array("do_while_schleife.gif","for_schleife.gif","while_schleife.gif");
$selectedPicture = $pictures[rand(0,count($pictures)-1)];


if($background === $textcolor){
    $background = array(rand(0,255), rand(0,255), rand(0,255));
    $textcolor = array(rand(0,255), rand(0,255), rand(0,255));
}else{
    echo "<body style='background-color:rgb($background[0],$background[1],$background[2])'>
    <h3 style='color:rgb($textcolor[0],$textcolor[1],$textcolor[2])'>Quote</h3>
    <img src='$selectedPicture'>
    </body>";
}

?>

</body>
</html>
