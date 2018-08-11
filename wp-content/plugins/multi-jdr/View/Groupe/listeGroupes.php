<tr>
	<td><?php echo $groupe->nom ?></td>
	<td>
		<form id='rejoindreGroupe<?php echo $groupe->idGroupe ?>' method='POST' action='#rejoindreGroupe<?php echo $groupe->idGroupe ?>'>
			<input class='mjdr-input' type='hidden' name='idGroupe' value='<?php echo $groupe->idGroupe ?>'>
			<div class="boton">
				<div class=botontext>
					<input class='mjdr-input' type='submit' name='rejoindre' value='Rejoindre le groupe'>
				</div>
				<div class=botontext>
					<input class='mjdr-input' type='submit' name='rejoindre' value='Rejoindre le groupe'>
				</div>
				<span class="twist" width="25%"></span>
				<span class="twist" width="25%"></span>
				<span class="twist" width="25%"></span>
				<span class="twist" width="25%"></span>
			</div>
			
		</form>
	</td>
</tr>