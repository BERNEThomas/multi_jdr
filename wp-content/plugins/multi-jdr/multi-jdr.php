<?php

/*
Plugin Name: Multi JDR
Description: Plugin de gestion de Multi JDR
version: 0.1
Author: BERNE Thomas
author URI: https://www.bernethomas.net/
*/

function mjdr_load_plugin_css()
{
    $plugin_url = plugin_dir_url( __FILE__ );
	wp_enqueue_style("mjdr_style", plugins_url("mjdr_style.css" , __FILE__ ));
}

class MultiJdr
{
	function __construct() {
		$this->includeFiles();
		$this->hooksManagement();
		$this->createShortCodes();
	}

	public function includeFiles() {
		include_once plugin_dir_path( __FILE__ ) . '/DatabaseCreation.php';
		include_once plugin_dir_path( __FILE__ ) . '/Model/Groupe.php';
		include_once plugin_dir_path( __FILE__ ) . '/Model/Enregistrement.php';
		include_once plugin_dir_path( __FILE__ ) . '/Model/Personnage.php';
		include_once plugin_dir_path( __FILE__ ) . '/GroupeShortcodes.php';
		include_once plugin_dir_path( __FILE__ ) . '/PersonnageShortcodes.php';
	}

	public function hooksManagement() {
		register_activation_hook(__FILE__, array('DatabaseCreation', 'CreateDbMultiJdrTables'));
		register_uninstall_hook(__FILE__, array('DatabaseCreation', 'uninstall'));
		add_action('wp_enqueue_scripts','mjdr_load_plugin_css');
	}
	
	public function createShortCodes()
	{
		add_shortcode('mjdr_ajout_groupe', 'mjdr_ajoutGroupe');
		add_shortcode('mjdr_liste_groupes', 'mjdr_listerGroupe');
		add_shortcode('mjdr_afficher_groupe', 'mjdr_affichageGroupe');
		add_shortcode('mjdr_liste_personnages', 'mjdr_listerPersonnages');
		add_shortcode('mjdr_ajout_personnages', 'mjdr_formCreationPersonnage');
	}
}

new MultiJdr();