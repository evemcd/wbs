<!DOCTYPE html>
<html lang="en">
<head>
    <title>LoopsS</title>
</head>
<body>
    <?php

$fruits = ["apples", "oranges", "bananas"];
for($x=0;$x<count($fruits);$x++){
    echo "$fruits[$x]<br>";
}

?>
<hr>
<?php

$x = 2;
while($x<50){
    $x = $x + 3;
    echo "$x<br>";
}

?>
<hr>
<?php

$x = 50;
do{
    echo "X is $x<br>";
    $x++;
}
while($x<5);

?>
<hr>
<?php

$family = ["Ross", "Eve", "Charlie", "Noah", "Lucas"];
foreach($family as $individual){
    echo "$individual<br>";
    echo "$family[3]<br>";
}

?>
</body>
</html>