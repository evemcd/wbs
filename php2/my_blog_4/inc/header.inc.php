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
// $_SESSION['email'] =  users['email']  => paul@paul.de
//select * from users where email = $_SESSION['blabla']

//wenn ein user angemeldet ist dann diesen Bereich zeigen
//wenn eine Variable $_SESSION['email'] existiert dann:
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