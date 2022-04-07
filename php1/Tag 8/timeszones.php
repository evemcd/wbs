<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">

</head>
<body>
<h1>Timezones</h1>

<?php 

$timeszones = $_POST["timezones"];

switch($timeszones){
	case "1":
		$timeszones = strtotime("-13 hours");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
		break;
    case "2":
        $timeszones = strtotime("-12 hours");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "3":
        $timeszones = strtotime("-11 hours");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "4":
        $timeszones = strtotime("-10 hours 30 minutes");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "5":
        $timeszones = strtotime("-10 hours");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "6":
        $timeszones = strtotime("-9 hours");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "7":
        $timeszones = strtotime("-8 hours");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "8":
        $timeszones = strtotime("-7 hours");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "9":
        $timeszones = strtotime("-6 hours");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "10":
        $timeszones = strtotime("-5 hours");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "11":
        $timeszones = strtotime("-4 hours 30 minutes");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "12":
        $timeszones = strtotime("-4 hours");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "13":
        $timeszones = strtotime("-3 hours");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "14":
        $timeszones = strtotime("-2 hours");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "15":
        $timeszones = strtotime("-1 hours");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "16":
        $timeszones = strtotime("-0 hours");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "17":
        $timeszones = strtotime("+1 hours");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "18":
        $timeszones = strtotime("+2 hours");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "19":
        $timeszones = strtotime("+2 hours 30 minutes");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "20":
        $timeszones = strtotime("+3 hours");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "21":
        $timeszones = strtotime("+3 hours 30 minutes");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "22":
        $timeszones = strtotime("+4 hours");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "23":
        $timeszones = strtotime("+4 hours 30 minutes");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "24":
        $timeszones = strtotime("+4 hours 45 minutes");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "25":
        $timeszones = strtotime("+5 hours");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "26":
        $timeszones = strtotime("+5 hours 30 minutes");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "27":
        $timeszones = strtotime("+6 hours");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "28":
        $timeszones = strtotime("+7 hours");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "29":
        $timeszones = strtotime("+8 hours");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "30":
        $timeszones = strtotime("+8 hours 30 minutes");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "31":
        $timeszones = strtotime("+9 hours");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "32":
        $timeszones = strtotime("+9 hours 30 minutes");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "33":
        $timeszones = strtotime("+10 hours");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "34":
        $timeszones = strtotime("+11 hours");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "35":
        $timeszones = strtotime("+11 hours 45 minutes");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "36":
        $timeszones = strtotime("+12 hours");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    case "37":
        $timeszones = strtotime("+13 hours");
        echo strftime("<br>%d. %B %Y, %H:%M:%S", $timeszones);
        break;
    }

?>


</body>
</html>
<!--
Mit der Funktion strtotime() kann PHP aus einem String einen Timestamp generieren. Dabei sind unterschiedliche Zeitangeben möglich. Bedingung ist aber, das diese in Englisch erfolgen. 
Dabei sind Angaben wie now, next tuesday, last wednesday, +30 days, -3months etc möglich, ebenso eine englische Datumsangabe. Die Funktion gibt dann eine Sekundezahl zurück, die dem Timestamp für den genannten Zeotpunkt entspricht. 
-->