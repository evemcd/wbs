<?php
require_once 'database.php'; 
$id = $_GET['id'];

$sql = 'SELECT * FROM users WHERE id=?';
$st = $db->prepare($sql);
$st->execute([$id]);
$daten = $st->fetch();
?>

<article class="profil">
<p class="motto"><em><?= $daten['slogan'] ?></em></p>
  <h2 class="header"><?= $daten['name']. ', '. $daten['vorname'] ?></h2>
  <p class="datum">angemeldet seit: <?= $daten['created_at'] ?></p>

  
  <p class="ueber"> <em><?= nl2br($daten['kurze_info']) ?></em></p>
	<p>E-Mail: <em><?= $daten['email'] ?></em></p>

</article>