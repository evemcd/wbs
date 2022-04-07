<?php
$db = new PDO('mysql:host=localhost;dbname=eve', 'root', '');
$db->query('SET NAMES utf8');
$sql = 'SELECT * FROM users';
$st = $db->query($sql);
$daten = $st->fetchAll();
?>

<h2>Aufgabe 2</h2>
<?php foreach($daten AS $werte): ?>
<div class="box">
    <h3 id="user"><?= $werte['name'] . ', ' . $werte['vorname'] ?></h3>
    <div>
        <p class="mehrInfo">Für mehr Infos auf den Namen klicken</p>
        <div class="info">
            <div class="infoBG">
                <p class="slogan"><?= $werte['slogan'] ?></p>
                <p class="name"><?= $werte['name'] . ', ' . $werte['vorname'] ?></p>
                <p class="created">angemeldet seit: <?= $werte['created_at'] ?></p>
                <p class="kurzeInfo"><?= $werte['kurze_info'] ?></p>
                <p class="mail"><?= $werte['email'] ?></p>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>