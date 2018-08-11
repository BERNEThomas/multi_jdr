	<input class='mjdr-input' type='hidden' name='idGroupe' value='<?php echo $_POST["idGroupe"] ?>'>
	<label for='motDePasse'>Mot de passe du groupe</label>
	<input class='mjdr-input' type='password' name='motDePasse' required>
	<input class='mjdr-input' type='submit' name='RejoindreGroupe' value='Rejoindre le groupe'>
</form>
<script type="text/javascript">
	jQuery("#rejoindreGroupe").dialog({
		modal: true
	});
</script>