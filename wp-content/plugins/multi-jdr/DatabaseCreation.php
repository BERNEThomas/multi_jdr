<?php

class DatabaseCreation
{

	public static function CreateDbMultiJdrTables()
	{
		global $wpdb;
		DatabaseCreation::CreateTableGroupe($wpdb);
		DatabaseCreation::CreateTablePersonnage($wpdb);
		DatabaseCreation::CreateTableEnregistrement($wpdb);
		DatabaseCreation::CreateTablePouvoir($wpdb);
		DatabaseCreation::CreateTableEquipement($wpdb);
		DatabaseCreation::CreateTableArmement($wpdb);
		DatabaseCreation::CreateTableCompetencePouvoir($wpdb);
		DatabaseCreation::CreateTableDefense($wpdb);
	}
	public static function CreateTableGroupe($wpdb)
	{
		$charset_collate = $wpdb->get_charset_collate();
		$table_name = $wpdb->prefix . 'mjdr_Groupe';

		$createQuery = "CREATE TABLE IF NOT EXISTS $table_name (
			idGroupe bigint(20) UNSIGNED PRIMARY KEY AUTO_INCREMENT not null,
			nom varchar(70) not null,
			motDePasse varchar(40) not null,
			upd DATETIME DEFAULT CURRENT_TIMESTAMP
		) $charset_collate;";

		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($createQuery);
	}
	public static function CreateTablePersonnage($wpdb)
	{
		$charset_collate = $wpdb->get_charset_collate();
		$table_name = $wpdb->prefix . 'mjdr_Personnage';

		$createQuery = "CREATE TABLE IF NOT EXISTS $table_name (
		    idPersonnage bigint(20) UNSIGNED PRIMARY KEY AUTO_INCREMENT not null,
			idJoueur bigint(20) UNSIGNED not null,
			actif tinyint(1) null,
			nom varchar(100) null,
			classe varchar(100) null,
			race varchar(100) null,
			traitsCaracteristiques varchar(100) null,
			imageUri varchar(500) null,
			age int null,
			poids varchar(100) null,
			taille float null,
			genre int null,
			alignement varchar(30) null,
			yeux varchar(100) null,
			peau varchar(100) null,
			cheveux varchar(100) null,
			dextrie int null,
			niveau int not null,
			xpActuelle int not null,
			xpProchainNiveau int not null,
			faitOrdinaire int not null,
			hautFait int not null,
			motivationTitre varchar(100) null,
			motivationDescription varchar(500) null,
			obligationTitre varchar(100) null,
			obligationDescription varchar(500) null,
			vieActuelle int null,
			vieMax int null,
			magieActuelle int null,
			magieMax int null,
			vigueurActuelle int null,
			vigueurMax int null,
			pointsADistribuer int null,
			pointsVie int null,
			pointsMagie int null,
			pointsVigueur int null,
			caracForce int null,
			caracDexterite int null,
			caracConstitution int null,
			caracIntelligence int null,
			caracSagesse int null,
			caracCharisme int null,
			caracChance int null,
			modifForce int null,
			modifDexterite int null,
			modifConstitution int null,
			modifIntelligence int null,
			modifSagesse int null,
			modifCharisme int null,
			modifChance int null,
			compPointsADistribuer int null,
			pouvoirPointsADistribuer int null,
			acrobatie int null,
			artMagieTech int null,
			artisanat int null,
			bluff int null,
			connaissances int null,
			deguisement int null,
			diplomatie int null,
			discretion int null,
			dressage int null,
			fouille int null,
			artsMartiaux int null,
			conduitePilotage int null,
			escalade int null,
			escamotage int null,
			estimation int null,
			evasion int null,
			intimidationRuse int null,
			lunguistique int null,
			natation int null,
			perception int null,
			premiersSecours int null,
			psychologie int null,
			jeuDActeur int null,
			sabotage int null,
			survie int null,
			utilisationObjetsMagiques int null,
			volALaTire int null,
			torture int null,
			resistance int null,
			visee int null,
			decouverteTresors int null,
			armesCaC int null,
			armesADistance int null,
			upd DATETIME DEFAULT CURRENT_TIMESTAMP,
			FOREIGN KEY (idJoueur) REFERENCES " . $wpdb->prefix . "users(ID)
		) $charset_collate;";

		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($createQuery);
	}
	public static function CreateTableEnregistrement($wpdb)
	{
		$charset_collate = $wpdb->get_charset_collate();
		$table_name = $wpdb->prefix . 'mjdr_Enregistrement';

		$createQuery = "CREATE TABLE IF NOT EXISTS $table_name (
			idGroupe bigint(20) UNSIGNED not null,
			idJoueur bigint(20) UNSIGNED not null,
			upd DATETIME DEFAULT CURRENT_TIMESTAMP,
			CONSTRAINT movie_Groupe_Joueur PRIMARY KEY (idGroupe, idJoueur),
			CONSTRAINT FK_idGroupe FOREIGN KEY (idGroupe) REFERENCES " . $wpdb->prefix . "mjdr_Groupe(idGroupe),
			CONSTRAINT FK_idJoueur FOREIGN KEY (idJoueur) REFERENCES " . $wpdb->prefix . "users(ID)
		) $charset_collate;";

		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($createQuery);
	}
	public static function CreateTablePouvoir($wpdb)
	{
		$charset_collate = $wpdb->get_charset_collate();
		$table_name = $wpdb->prefix . 'mjdr_Pouvoir';

		$createQuery = "CREATE TABLE IF NOT EXISTS $table_name (
		    idPouvoir bigint(20) UNSIGNED PRIMARY KEY AUTO_INCREMENT not null,
		    idPersonnage bigint(20) UNSIGNED not null,
		    valeur int null,
			upd DATETIME DEFAULT CURRENT_TIMESTAMP,
		    FOREIGN KEY (idPersonnage) REFERENCES " . $wpdb->prefix . "mjdr_Personnage(idPersonnage)
		) $charset_collate;";

		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($createQuery);
	}
	public static function CreateTableCompetencePouvoir($wpdb)
	{
		$charset_collate = $wpdb->get_charset_collate();
		$table_name = $wpdb->prefix . 'mjdr_CompetencePouvoir';

		$createQuery = "CREATE TABLE IF NOT EXISTS $table_name (
		    idCompetencePouvoir bigint(20) UNSIGNED PRIMARY KEY AUTO_INCREMENT not null,
		    idPouvoir bigint(20) UNSIGNED not null,
		    testCarac varchar(50) null,
		    libelle varchar(200) null,
		    niveau int null,
		    description varchar(200) null,
			upd DATETIME DEFAULT CURRENT_TIMESTAMP,
		    FOREIGN KEY (idPouvoir) REFERENCES " . $wpdb->prefix . "mjdr_Pouvoir(idPouvoir)
		) $charset_collate;";

		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($createQuery);
	}
	public static function CreateTableEquipement($wpdb)
	{
		$charset_collate = $wpdb->get_charset_collate();
		$table_name = $wpdb->prefix . 'mjdr_Equipement';

		$createQuery = "CREATE TABLE IF NOT EXISTS $table_name (
		    idEquipement bigint(20) UNSIGNED PRIMARY KEY AUTO_INCREMENT not null,
		    idPersonnage bigint(20) UNSIGNED not null,
		    nom varchar(100) null,
		    type varchar(100) null,
		    description varchar(100) null,
		    effet varchar(100) null,
		    prix int null,
			upd DATETIME DEFAULT CURRENT_TIMESTAMP,
		    FOREIGN KEY (idPersonnage) REFERENCES " . $wpdb->prefix . "mjdr_Personnage(idPersonnage)
		) $charset_collate;";

		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($createQuery);
	}
	public static function CreateTableArmement($wpdb)
	{
		$charset_collate = $wpdb->get_charset_collate();
		$table_name = $wpdb->prefix . 'mjdr_Armement';

		$createQuery = "CREATE TABLE IF NOT EXISTS $table_name (
		    idArmement bigint(20) UNSIGNED PRIMARY KEY AUTO_INCREMENT not null,
		    idPersonnage bigint(20) UNSIGNED not null,
		    nom varchar(100) null,
		    nombreDes int null,
		    typeDes int null,
		    ajoutDegats int null,
		    etat int null,
		    prix int null,
			upd DATETIME DEFAULT CURRENT_TIMESTAMP,
		    FOREIGN KEY (idPersonnage) REFERENCES " . $wpdb->prefix . "mjdr_Personnage(idPersonnage)
		) $charset_collate;";

		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($createQuery);
	}
	public static function CreateTableDefense($wpdb)
	{
		$charset_collate = $wpdb->get_charset_collate();
		$table_name = $wpdb->prefix . 'mjdr_Defense';

		$createQuery = "CREATE TABLE IF NOT EXISTS $table_name (
		    idDefense bigint(20) UNSIGNED PRIMARY KEY AUTO_INCREMENT not null,
		    idPersonnage bigint(20) UNSIGNED not null,
		    nom varchar(100) null,
		    nombreDes int null,
		    typeDes int null,
		    ajoutDegats int null,
		    etat int null,
		    prix int null,
			upd DATETIME DEFAULT CURRENT_TIMESTAMP,
		    FOREIGN KEY (idPersonnage) REFERENCES " . $wpdb->prefix . "mjdr_Personnage(idPersonnage)
		); $charset_collate;";

		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($createQuery);
	}

	public static function uninstall()
	{
		global $wpdb;

		$createQuery = "
			drop table if exists " . $wpdb->prefix . "mjdr_Enregistrement;
			drop table if exists " . $wpdb->prefix . "mjdr_CompetencePouvoir;
			drop table if exists " . $wpdb->prefix . "mjdr_Pouvoir;
			drop table if exists " . $wpdb->prefix . "mjdr_Defense;
			drop table if exists " . $wpdb->prefix . "mjdr_Armement;
			drop table if exists " . $wpdb->prefix . "mjdr_Equipement;
			drop table if exists " . $wpdb->prefix . "mjdr_Groupe;
			drop table if exists " . $wpdb->prefix . "mjdr_Personnage;";
		$wpdb->query($createQuery);
	}
}