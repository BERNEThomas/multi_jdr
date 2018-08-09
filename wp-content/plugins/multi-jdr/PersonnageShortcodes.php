<?php
function mjdr_formCreationPersonnage()
{
	ob_start();
	include_once plugin_dir_path( __FILE__ ) . "/View/Personnage/ajoutPersonnageForm.php";
	$html = ob_get_clean();
	return $html;
}
function mjdr_listerPersonnages() {
	ob_start();
	if (isset($_GET["idJoueur"]) && is_numeric(trim($_GET["idJoueur"])))
		$id = trim($_GET["idJoueur"]);
	else $id = um_profile_id();
	$html = "<table>";
	foreach (Personnage::readByKey("idJoueur", $id) as $p) {
		$html .= "<tr>";
		$html .= "<td>" . $p->nom . "</td>";
		$html .= "<td>" . $p->classe . "</td>";
		$html .= "<td>" . $p->niveau . "</td>";
		$html .= "<td>" . $p->vieActuelle . "/" . $p->vieMax . "</td>";
		$html .= "<td><form id='rejoindreGroupe" . $p->idGroupe . "' method='POST' action='#rejoindreGroupe" . $p->idGroupe . "'>";
		$html .= "<input class='mjdr-input' type='hidden' name='idGroupe' value='" . $p->idGroupe . "'>";
		$html .= "<input class='mjdr-input' type='submit' name='rejoindre' value='Rejoindre le groupe'>";
		$html .= "</form></td>";
		$html .= "</tr>";
	}
	$html .= "</table>";
	return $html;
}