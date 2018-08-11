<?php

function mjdr_ajoutGroupe() {
	ob_start();
	include_once plugin_dir_path( __FILE__ ) . "/View/Groupe/FormAjoutGroupe.php";
	$html = ob_get_clean();

	if (isset( $_POST["creerGroupe"])) {
		$groupe = new Groupe(null, $_POST["groupe_nom"], $_POST["groupe_mdp"]);
		$groupe->create();
	}

	return $html;
}

function mjdr_listerGroupe() {
	ob_start();

	$html = "<table border='0' class='box-multi_jdr'>";
	foreach (Groupe::readAll() as $groupe) {
		include plugin_dir_path( __FILE__ ) . "/View/Groupe/listeGroupes.php";
	}
	$html .= ob_get_clean();
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
		ob_start();
		include plugin_dir_path( __FILE__ ) . "/View/Groupe/PopupRejoindreGroupe.php";
		$html .= ob_get_clean();
		
	}
	return $html;
}

function mjdr_affichageGroupe() {
	$enr = new Enregistrement();
	$enr->readByJoueur(um_profile_id());
	if(!empty($enr)){
		$groupe = new Groupe();
		$groupe->read($enr->idGroupe);
		$html = "<div class='box-multi_jdr'><h1 class='box-multi_jdr-titre1'>Liste des membres : " . $groupe->nom . "</h1>";
		$html .= "<table>";
		ob_start();
		foreach (Enregistrement::readByGroupe($groupe->idGroupe) as $enregistrement) {
			um_fetch_user($enregistrement->idJoueur);
			include plugin_dir_path( __FILE__ ) . "/View/Groupe/affichageDuGroupe.php";
		}
		$html .= ob_get_clean();
		$html .= "</table></div>";
	}
	return $html;
}