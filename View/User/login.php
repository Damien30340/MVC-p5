<form class="login-form" action="Login" method="post"> 
	<label>Identifiant</label>
	<input type="text" name="mail" />
	<label>Mot de passe</label>
	<input type="password" name="password" />
	<input type="submit" value="Se connecter" />
</form>

<?php var_dump($this->UserManager->getAll()); ?>