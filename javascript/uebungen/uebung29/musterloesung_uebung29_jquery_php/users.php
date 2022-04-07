<?php
require_once 'database.php';

$sql1 = 'SELECT * FROM users'; 
$st1 = $db->query($sql1);
$daten1 = $st1->fetchAll();

foreach($daten1 AS $werte):
?>

<section class="card col-md-4 my-3">
	<h3 class="card-header"><?= $werte['name'] .', '.$werte['vorname']?></h2>
	<span id="id"><?= $werte['id']?></span>
	<p class="card-body">Für mehr Info auf den Namen klicken</p>
</section>

<?php endforeach; ?>

