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

  <div class="btn">
    [<a href="#" class="edit">Bearbeiten</a>]
    [<a href="#" class="delete">Profil löschen</a>]
  </div>

  <form action="" method="post" class="weg">
    <fieldset>
      <legend>Wollen Sie wirklich Ihr Profil löschen?</legend>
      <input type="hidden" name="csrf_token" value="$_SESSION['token']?>">
      <button type="submit" class="delete">Profil endgültig löschen</button>
    </fieldset>
  </form>
</article>




