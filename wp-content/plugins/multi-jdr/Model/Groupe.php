<?php

/**
 * Classe Groupe de joueurs
 */
class Groupe
{
	public $idGroupe;
	public $nom;
	public $motDePasse;
	
	public function __construct($idGroupe=null, $nom=null, $motDePasse=null)
	{
		$this->idGroupe = $idGroupe;
		$this->nom = $nom;
		$this->motDePasse = $motDePasse;
	}

	public function create()
	{
		global $wpdb;
		$objectToPush = array(
			'nom' => $this->nom,
			'motDePasse' => $this->motDePasse,
		);
		$wpdb->insert($wpdb->prefix . "mjdr_Groupe", $objectToPush);
		$this->idGroupe = $wpdb->insert_id;
	}

	public static function readAll()
	{
		global $wpdb;
		$query = "select * from " . $wpdb->prefix . "mjdr_Groupe";
		$liste = array();
		foreach ($wpdb->get_results($query) as $row)
			$liste[] = new Groupe($row->idGroupe, $row->nom, $row->motDePasse);
		return $liste;
	}

	public function read($id)
	{
		global $wpdb;
		$query = "select * from " . $wpdb->prefix . "mjdr_Groupe where idGroupe=" . $id;
		$row = $wpdb->get_row("$query");
		$this->idGroupe = $row->idGroupe;
		$this->nom = $row->nom;
		$this->motDePasse = $row->motDePasse;
        return $this;
	}

	public function update()
	{
		global $wpdb;
		$objectToPush = array(
			'nom' => $this->nom,
			'motDePasse' => $this->motDePasse,
		);
		$wpdb->update($wpdb->prefix . "mjdr_Groupe", $objectToPush, array('id' => $this->idGroupe));
	}

	public function delete()
	{
		global $wpdb;
		$wpdb->delete($wpdb->prefix . "mjdr_Groupe", array( 'id' => $this->idGroupe));
	}

}