<?php

/**
 * Classe Enregistrement
 */
class Enregistrement
{
	public $idGroupe;
	public $idJoueur;
	
	public function __construct($idGroupe=null, $idJoueur=null)
	{
		$this->idGroupe = $idGroupe;
		$this->idJoueur = $idJoueur;
	}

	public function create()
	{
		global $wpdb;
		$objectToPush = array(
			'idGroupe' => $this->idGroupe,
			'idJoueur' => $this->idJoueur,
		);
		$wpdb->insert($wpdb->prefix . "mjdr_Enregistrement", $objectToPush);
	}

	public static function readAll()
	{
		global $wpdb;
		$query = "select * from " . $wpdb->prefix . "mjdr_Enregistrement";
		$liste = array();
		foreach ($wpdb->get_results($query) as $row)
			$liste[] = new Enregistrement($row->idGroupe, $row->idJoueur);
		return $liste;
	}

	public static function readByGroupe($id)
	{
		global $wpdb;
		$query = "select * from " . $wpdb->prefix . "mjdr_Enregistrement where idGroupe=" . $id;
        $liste = array();
		foreach ($wpdb->get_results($query) as $row)
			$liste[] = new Enregistrement($row->idGroupe, $row->idJoueur);
		return $liste;
	}
	public function readByJoueur($id)
	{
		global $wpdb;
		$query = "select * from " . $wpdb->prefix . "mjdr_Enregistrement where idJoueur=" . $id;
		foreach ($wpdb->get_results($query) as $row) {
			$this->idGroupe = $row->idGroupe;
			$this->idJoueur = $row->idJoueur;
			return $this;
		}
		return false;
	}

	public function deleteByGroupe()
	{
		global $wpdb;
		$wpdb->delete($wpdb->prefix . "mjdr_Enregistrement", array( 'id' => $this->idGroupe));
	}

	public function deleteByJoueur()
	{
		global $wpdb;
		$wpdb->delete($wpdb->prefix . "mjdr_Enregistrement", array( 'id' => $this->idJoueur));
	}

}