<?php
$sql = 'SELECT * FROM users WHERE email = ?';
$st = $db->prepare($sql);
$st->execute([$_SESSION['eingeloggt']]);
$daten = $st->fetch();
?>

<article class="profil">
  <h2 class="header"><?= bereinige($daten['name']) ?></h2>

  <p class="datum">angemeldet seit: <?=  formatiereDatum( $daten['created_at'] ) ?></p>

  <p class="motto">Motto: <em><?= bereinige($daten['motto']) ?></em> </p>
  <p class="ueber"><em><?= nl2br( bereinige($daten['ueber_mich']) ) ?></em> </p>

</article>




