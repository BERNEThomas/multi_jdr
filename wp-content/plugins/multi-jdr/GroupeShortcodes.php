<?php

function mjdr_ajoutGroupe() {
	ob_start();

    ?>
    <form id='v_form' method='post' action='#v_form'>
		<table>
			<tr>
				<td>
					<label for='groupe_nom'>Nom</label>
				</td><td>
					<input class='mjdr-input' type='text' id='groupe_nom' name='groupe_nom' placeholder='Nom du groupe' required>
				</td>
			</tr>
			<tr>
				<td>
					<label for='groupe_mdp'>Mot de passe</label>
				</td><td>
					<input class='mjdr-input' type='password' id='groupe_mdp' name='groupe_mdp' placeholder='mot de passe' required>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input class='mjdr-input' type='submit' id='creerGroupe' name='creerGroupe'></td>
			</tr>
		</table>
	</form>
	<?php

	$html = ob_get_clean();

	if (isset( $_POST["creerGroupe"])) {
		$groupe = new Groupe(null, $_POST["groupe_nom"], $_POST["groupe_mdp"]);
		$groupe->create();
	}

	return $html;
}

function mjdr_listerGroupe() {
	ob_start();

	$html = "<table>";
	foreach (Groupe::readAll() as $groupe) {
		$html .= "<tr>";
		$html = $html . "<td>" . $groupe->nom . "</td>";
		$html .= "<td><form id='rejoindreGroupe" . $groupe->idGroupe . "' method='POST' action='#rejoindreGroupe" . $groupe->idGroupe . "'>";
		$html .= "<input class='mjdr-input' type='hidden' name='idGroupe' value='" . $groupe->idGroupe . "'>";
		$html .= "<input class='mjdr-input' type='submit' name='rejoindre' value='Rejoindre le groupe'>";
		$html .= "</form></td>";
		$html .= "</tr>";
	}
	$html .= "</table>";

	if(isset($_POST["idGroupe"])) {
		$html .= "<form id='rejoindreGroupe' method='POST' action='#rejoindreGroupe'>";

		if (isset($_POST["RejoindreGroupe"])){
			$groupe = new Groupe();
			$groupe->read($_POST["idGroupe"]);
			if ($_POST["motDePasse"] == $groupe->motDePasse){
				$enr = new Enregistrement($_POST["idGroupe"], um_profile_id());
				$enr->create();
				wp_redirect("groupe");
			}
			else $html .= "<p>Le mot de passe est incorrect</p>";
		}

		$html .= "<input class='mjdr-input' type='hidden' name='idGroupe' value='" . $_POST["idGroupe"] . "'>";
		$html .= "<label for='motDePasse'>Mot de passe du groupe</label>";
		$html .= "<input class='mjdr-input' type='password' name='motDePasse' required>";
		$html .= "<input class='mjdr-input' type='submit' name='RejoindreGroupe' value='Rejoindre le groupe'>";
		$html .= "</form>";
		
	}
	return $html;
}

function mjdr_affichageGroupe() {
	echo "<pre>" . um_profile_id() . "</pre>";
	$enr = new Enregistrement();
	$enr->readByJoueur(um_profile_id());
	if(!empty($enr)){
		$groupe = new Groupe();
		$groupe->read($enr->idGroupe);
		$html = "<h1>Liste des membres : " . $groupe->nom . "</h1>";
		$html .= "<table>";
		foreach (Enregistrement::readByGroupe($groupe->idGroupe) as $enregistrement) {
			um_fetch_user($enregistrement->idJoueur);
			$html .= "<tr>";
			$html .= "<td>" . um_user('user_email') . "</td>";
			$html .= "<td>" . um_user('user_nicename') . "</td>";
			$html .= "<td><form method='GET' action='../personnages-du-joueur'>";
			$html .= "<input class='mjdr-input' type='hidden' name='idJoueur' value='" . $enregistrement->idJoueur . "'>";
			$html .= "<input class='mjdr-input' type='submit' value='Accéder aux personnages'>";
			$html .= "</form></td>";
			$html .= "</tr>";
		}
		$html .= "</table>";
	}
	return $html;
}