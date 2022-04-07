<h2>Registrierung</h2>
<form action="inc/registrierung.php" method="post" class="registrierung">

<fieldset>
	<legend>Pflichtfelder</legend>
	<input type="text" name="nn" 
			placeholder="Nachname eingeben" required />
			
	<input type="text" name="mail" 
			placeholder="E-Mail eingeben" required />
			
	<input type="password" name="pwd" 
			placeholder="Passwort eingeben" required />
</fieldset>

<fieldset>
	<legend>Optional</legend>
	<textarea name="motto" placeholder="Motto"></textarea>
	<textarea name="ueber" placeholder="Über mich"></textarea>
</fieldset>
<input type="submit" value="Konto anlegen" />
</form>