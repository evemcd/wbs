
<form action="inc/login_check.php" method="post">
  <input type="text" name="mail" placeholder="E-Mail eingeben"  />
  <input type="password" name="pwd" placeholder="Passwort" />
  <input type="submit" value="Einloggen" />
</form>

<ul>
<li class="<?php echo ($page === 'neu') ? 'active' : '';  ?>"> 
  <a href="index.php?page=neu">Registrierung</a> 
</li>
</ul>

