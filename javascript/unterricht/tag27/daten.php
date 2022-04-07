<?php
$db = new PDO('mysql:host=localhost;dbname=myblog_webdev10', 'root', '');
$db->query('SET NAMES utf8');
$sql = 'SELECT * FROM users';
$st = $db->query($sql);
$daten = $st->fetchAll();
?>

<h2>User Daten</h2>
<form class="col-md-4">
    <select name="user" id="user" class="form-select">
        <option value="">Bitte auswählen</option>
        <?php foreach($daten AS $werte): ?>
            <option value="<?= $werte['id'] ?>">
                <?= $werte['name'] ?>
            </option>
        <?php endforeach; ?>
    </select>
</form>