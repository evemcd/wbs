<?php
$db = new PDO('mysql:host=localhost;dbname=myblog_webdev10', 'root', '');
$db->query('SET NAMES utf8');

$id = $_GET['id'];
$sql = 'SELECT * FROM users WHERE id = ?';
$st = $db->prepare($sql);
$st->execute([$id]);
$daten = $st->fetch();
?>

<article class="my-2">
    <h2><?= $daten['name'] ?></h2>
    <p>angemeldet seit: <?= $daten['created_at'] ?></p>
    <p>Motto: <?= $daten['motto'] ?></p>
    <p><em><?= $daten['ueber_mich'] ?></em></p>
</article>