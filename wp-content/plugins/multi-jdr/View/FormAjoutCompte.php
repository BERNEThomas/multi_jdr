<form method='post' action="<?php echo plugins_url( 'form_submit.php', __FILE__ ); ?>">
	<table>
		<tr>
			
			<td>
				<label for='groupe_nom'>Nom</label>
			</td><td>
				<input type='text' id='groupe_nom' name='groupe_nom' placeholder='Nom du groupe' required>
			</td>
		</tr>
		<tr>
			<td>
				<label for='groupe_mdp'>Mot de passe</label>
			</td><td>
				<input type='password' id='groupe_mdp' name='groupe_mdp' placeholder='mot de passe' required>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type='submit' id='creerGroupe' name='creerGroupe'></td>
		</tr>
	</table>
</form>