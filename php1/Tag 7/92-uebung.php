<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Übung</title>
</head>
<body>

<?php

    $amount = $_POST["amount"];
    $years = $_POST["years"];

    echo "Sie möchten $amount Euro über $years Jahre anlegen.<br>";

    if($years<=3){
        $interestrate = 2;
        echo "Der Zinssatz ist $interestrate%<br>";
        for($x=1;$x<=$years;$x++){
            $interest = ($amount * 0.02);
            $amount = $interest + $amount;
            echo "Zinsen für Jahr $x sind $interest Euro, der Gesamtbetrag ist $amount Euro<br>";
        }
    }elseif($years>=4 && $years<=5){
        $interestrate = 3;
        echo "Der Zinssatz ist $interestrate%<br>";
        for($x=1;$x<=$years;$x++){
            $interest = $amount * 0.03;
            $amount = $interest + $amount;
            echo "Zinsen für Jahr $x sind $interest Euro, der Gesamtbetrag ist $amount Euro<br>";
        }
    }elseif($years>=6 && $years<=9){
        $interestrate = 4;
        echo "Der Zinssatz ist $interestrate%<br>";
        for($x=1;$x<=$years;$x++){
            $interest = $amount * 0.04;
            $amount = $interest + $amount;
            echo "Zinsen für Jahr $x sind $interest Euro, der Gesamtbetrag ist $amount Euro<br>";
        }
    }elseif($years>=10){
        $interestrate = 5;
        echo "Der Zinssatz ist $interestrate%<br>";
        for($x=1;$x<=$years;$x++){
            $interest = $amount * 0.05;
            $amount = $interest + $amount;
            echo "Zinsen für Jahr $x sind $interest Euro, der Gesamtbetrag ist $amount Euro<br>";
        }
    }



?>
</body>
</html>