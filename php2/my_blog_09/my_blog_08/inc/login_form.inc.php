
<form action="inc/login_check.php" method="post">
  <input type="text" name="mail" placeholder="E-Mail eingeben"  />
  <input type="password" name="pwd" placeholder="Passwort" />
  <!-- csrfToken in input rein -->
  <input type="hidden" name="csrf_token" value="<?= $_SESSION['token']?>" />
  <input type="submit" value="Einloggen" />
</form>

<ul>
<li class="<?php echo ($page === 'neu') ? 'active' : '';  ?>"> 
  <a href="index.php?page=neu">Registrierung</a> 
</li>
</ul>

