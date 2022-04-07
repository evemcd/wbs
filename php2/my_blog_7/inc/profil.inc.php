<?php
$sql = 'SELECT * FROM users WHERE email = ?';
$st = $db->prepare($sql);
$st->execute([$_SESSION['eingeloggt']]);                //session name
$daten = $st->fetch();
?>

<article class="profil">
    <h2 class="header"><?= bereinige($daten['name']) ?></h2>
    <p class="datum">angemeldet seit: <?= formatiereDatum(bereinige($daten['created_at'])) ?></p>
    <p class="motto">Motto: <em><?= bereinige($daten['motto']) ?></em></p>
    <p class="ueber">Über mich: <em><?= nl2br(bereinige($daten['ueber_mich'])) ?></em></p>      
    <!-- nl2br new line to break, fügt zeilenumbrüche an -->
</article>