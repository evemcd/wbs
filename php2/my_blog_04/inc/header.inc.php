<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8" />
	<title>PHP</title>
	<style>
	<?php
		include 'master.css';
	?>
	</style>
</head>
<body>
<div id="container">
<header>
	<h1>WebDesign</h1>
</header>
<!--++++++++++-->
<div class="container">
<nav>
<ul>
	<li class="<?= empty($page) ? 'active' : '';  ?>">
		<a href="index.php">Home</a>
	</li>
	<li class="<?php echo ($page === 'about') ? 'active' : '';  ?>">
		<a href="index.php?page=about">About</a>
	</li>
	<li class="<?= ($page === 'gallery') ? 'active' : '';  ?>">
		<a href="index.php?page=gallery">Gallery</a>
	</li>
	<li class="<?= ($page === 'guestbook') ? 'active' : '';  ?>">
		<a href="index.php?page=guestbook">Gästebuch</a>
	</li>
</ul>

<?php 
/*
if( isset ($_SESSION['meldung']) ) {
	echo $_SESSION['meldung'];
}
*/
?>
<!-- die variable hier schreiben damit alle meldungen angezeigt werden können-->
<?php if(isset($meldung)):?>
	<p class="msg"> <?= $meldung ?> </p>
<?php endif;?>


<?php
//wenn ein user angemeldet ist dann das zeigen
if( isset($_SESSION['email'] )) {
	require_once 'inc/user_menue.inc.php';
}
else {
	//für Gäste (nicht angemeldete User)
	require_once 'inc/login_form.inc.php';
}

?>
</nav>
<main>