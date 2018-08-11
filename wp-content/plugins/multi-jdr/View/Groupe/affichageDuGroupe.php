<tr>
	<td><?php echo um_user('user_email'); ?></td>
	<td><?php echo um_user('user_nicename'); ?></td>
	<td>
		<form method='GET' action='../personnages-du-joueur'>
			<input class='mjdr-input' type='hidden' name='idJoueur' value='<?php echo $enregistrement->idJoueur; ?>'>
			<div class="boton">
				<div class=botontext>
					<input class='mjdr-input' type='submit' value='Accéder aux personnages'>
				</div>
				<div class=botontext>
					<input class='mjdr-input' type='submit' value='Accéder aux personnages'>
				</div>
				<span class="twist" width="25%"></span>
				<span class="twist" width="25%"></span>
				<span class="twist" width="25%"></span>
				<span class="twist" width="25%"></span>
			</div>
		</form>
	</td>
</tr>