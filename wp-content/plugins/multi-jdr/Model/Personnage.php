<?php

/**
 * Classe des personnages
 */
class Personnage
{
    public $idPersonnage;
    public $idJoueur;
    public $nom;
    public $classe;
    public $race;
    public $traitsCaracteristiques;
    public $age;
    public $poids;
    public $taille;
    public $genre;
    public $alignement;
    public $yeux;
    public $peau;
    public $cheveux;
    public $dextrie;
    public $niveau;
    public $xpActuelle;
    public $xpProchainNiveau;
    public $faitOrdinaire;
    public $hautFait;
    public $motivationTitre;
    public $motivationDescription;
    public $obligationTitre;
    public $obligationDescription;
    public $vieActuelle;
    public $vieMax;
    public $magieActuelle;
    public $magieMax;
    public $vigueurActuelle;
    public $vigueurMax;
    public $pointsADistribuer;
    public $pointsVie;
    public $pointsMagie;
    public $pointsVigueur;
    public $caracForce;
    public $caracDexterite;
    public $caracConstitution;
    public $caracIntelligence;
    public $caracSagesse;
    public $caracCharisme;
    public $caracChance;
    public $modifForce;
    public $modifDexterite;
    public $modifConstitution;
    public $modifIntelligence;
    public $modifSagesse;
    public $modifCharisme;
    public $modifChance;
    public $compPointsADistribuer;
    public $pouvoirPointsADistribuer;
    public $acrobatie;
    public $artMagieTech;
    public $artisanat;
    public $bluff;
    public $connaissances;
    public $deguisement;
    public $diplomatie;
    public $discretion;
    public $dressage;
    public $fouille;
    public $artsMartiaux;
    public $conduitePilotage;
    public $escalade;
    public $escamotage;
    public $estimation;
    public $evasion;
    public $intimidationRuse;
    public $lunguistique;
    public $natation;
    public $perception;
    public $premiersSecours;
    public $psychologie;
    public $jeuDActeur;
    public $sabotage;
    public $survie;
    public $utilisationObjetsMagiques;
    public $volALaTire;
    public $torture;
    public $resistance;
    public $visee;
    public $decouverteTresors;
    public $armesCaC;
    public $armesADistance;
	
	public function __construct($idPersonnage=null, $idJoueur=null, $nom=null, $classe=null, $race=null, $traitsCaracteristiques=null, $age=null, $poids=null, $taille=null, $genre=null, $yeux=null, $peau=null, $cheveux=null, $dextrie=null, $niveau=null, $xpActuelle=null, $xpProchainNiveau=null, $faitOrdinaire=null, $hautFait=null, $motivationTitre=null, $motivationDescription=null, $obligationTitre=null, $obligationDescription=null, $vieActuelle=null, $vieMax=null, $magieActuelle=null, $magieMax=null, $vigueurActuelle=null, $vigueurMax=null, $pointsADistribuer=null, $pointsVie=null, $pointsMagie=null, $pointsVigueur=null, $caracForce=null, $caracDexterite=null, $caracConstitution=null, $caracIntelligence=null, $caracSagesse=null, $caracCharisme=null, $caracChance=null, $modifForce=null, $modifDexterite=null, $modifConstitution=null, $modifIntelligence=null, $modifSagesse=null, $modifCharisme=null, $modifChance=null, $compPointsADistribuer=null, $pouvoirPointsADistribuer=null, $acrobatie=null, $artMagieTech=null, $artisanat=null, $bluff=null, $connaissances=null, $deguisement=null, $diplomatie=null, $discretion=null, $dressage=null, $fouille=null, $artsMartiaux=null, $conduitePilotage=null, $escalade=null, $escamotage=null, $estimation=null, $evasion=null, $intimidationRuse=null, $lunguistique=null, $natation=null, $perception=null, $premiersSecours=null, $psychologie=null, $jeuDActeur=null, $sabotage=null, $survie=null, $utilisationObjetsMagiques=null, $volALaTire=null, $torture=null, $resistance=null, $visee=null, $decouverteTresors=null, $armesCaC=null, $armesADistance=null)
	{
		$this->idPersonnage = $idPersonnage;
	    $this->idJoueur = $idJoueur;
	    $this->nom = $nom;
	    $this->classe = $classe;
	    $this->race = $race;
	    $this->traitsCaracteristiques = $traitsCaracteristiques;
	    $this->age = $age;
	    $this->poids = $poids;
	    $this->taille = $taille;
	    $this->genre = $genre;
	    $this->alignement = $alignement;
	    $this->yeux = $yeux;
	    $this->peau = $peau;
	    $this->cheveux = $cheveux;
	    $this->dextrie = $dextrie;
	    $this->niveau = $niveau;
	    $this->xpActuelle = $xpActuelle;
	    $this->xpProchainNiveau = $xpProchainNiveau;
	    $this->faitOrdinaire = $faitOrdinaire;
	    $this->hautFait = $hautFait;
	    $this->motivationTitre = $motivationTitre;
	    $this->motivationDescription = $motivationDescription;
	    $this->obligationTitre = $obligationTitre;
	    $this->obligationDescription = $obligationDescription;
	    $this->vieActuelle = $vieActuelle;
	    $this->vieMax = $vieMax;
	    $this->magieActuelle = $magieActuelle;
	    $this->magieMax = $magieMax;
	    $this->vigueurActuelle = $vigueurActuelle;
	    $this->vigueurMax = $vigueurMax;
	    $this->pointsADistribuer = $pointsADistribuer;
	    $this->pointsVie = $pointsVie;
	    $this->pointsMagie = $pointsMagie;
	    $this->pointsVigueur = $pointsVigueur;
	    $this->caracForce = $caracForce;
	    $this->caracDexterite = $caracDexterite;
	    $this->caracConstitution = $caracConstitution;
	    $this->caracIntelligence = $caracIntelligence;
	    $this->caracSagesse = $caracSagesse;
	    $this->caracCharisme = $caracCharisme;
	    $this->caracChance = $caracChance;
	    $this->modifForce = $modifForce;
	    $this->modifDexterite = $modifDexterite;
	    $this->modifConstitution = $modifConstitution;
	    $this->modifIntelligence = $modifIntelligence;
	    $this->modifSagesse = $modifSagesse;
	    $this->modifCharisme = $modifCharisme;
	    $this->modifChance = $modifChance;
	    $this->compPointsADistribuer = $compPointsADistribuer;
	    $this->pouvoirPointsADistribuer = $pouvoirPointsADistribuer;
	    $this->acrobatie = $acrobatie;
	    $this->artMagieTech = $artMagieTech;
	    $this->artisanat = $artisanat;
	    $this->bluff = $bluff;
	    $this->connaissances = $connaissances;
	    $this->deguisement = $deguisement;
	    $this->diplomatie = $diplomatie;
	    $this->diplomatie = $diplomatie;
	    $this->dressage = $dressage;
	    $this->fouille = $fouille;
	    $this->artsMartiaux = $artsMartiaux;
	    $this->conduitePilotage = $conduitePilotage;
	    $this->escalade = $escalade;
	    $this->escamotage = $escamotage;
	    $this->estimation = $estimation;
	    $this->evasion = $evasion;
	    $this->intimidationRuse = $intimidationRuse;
	    $this->lunguistique = $lunguistique;
	    $this->natation = $natation;
	    $this->perception = $perception;
	    $this->premiersSecours = $premiersSecours;
	    $this->psychologie = $psychologie;
	    $this->jeuDActeur = $jeuDActeur;
	    $this->sabotage = $sabotage;
	    $this->survie = $survie;
	    $this->utilisationObjetsMagiques = $utilisationObjetsMagiques;
	    $this->volALaTire = $volALaTire;
	    $this->torture = $torture;
	    $this->resistance = $resistance;
	    $this->visee = $visee;
	    $this->decouverteTresors = $decouverteTresors;
	    $this->armesCaC = $armesCaC;
	    $this->armesADistance = $armesADistance;
	}

	public function create()
	{
		global $wpdb;
		$objectToPush = array(
			'idPersonnage' => $this->idPersonnage,
			'idJoueur' => $this->idJoueur,
			'nom' => $this->nom,
			'classe' => $this->classe,
			'race' => $this->race,
			'traitsCaracteristiques' => $this->traitsCaracteristiques,
			'age' => $this->age,
			'poids' => $this->poids,
			'taille' => $this->taille,
			'genre' => $this->genre,
			'alignement' => $this->alignement,
			'yeux' => $this->yeux,
			'peau' => $this->peau,
			'cheveux' => $this->cheveux,
			'dextrie' => $this->dextrie,
			'niveau' => $this->niveau,
			'xpActuelle' => $this->xpActuelle,
			'xpProchainNiveau' => $this->xpProchainNiveau,
			'faitOrdinaire' => $this->faitOrdinaire,
			'hautFait' => $this->hautFait,
			'motivationTitre' => $this->motivationTitre,
			'motivationDescription' => $this->motivationDescription,
			'obligationTitre' => $this->obligationTitre,
			'obligationDescription' => $this->obligationDescription,
			'vieActuelle' => $this->vieActuelle,
			'vieMax' => $this->vieMax,
			'magieActuelle' => $this->magieActuelle,
			'magieMax' => $this->magieMax,
			'vigueurActuelle' => $this->vigueurActuelle,
			'vigueurMax' => $this->vigueurMax,
			'pointsADistribuer' => $this->pointsADistribuer,
			'pointsVie' => $this->pointsVie,
			'pointsMagie' => $this->pointsMagie,
			'pointsVigueur' => $this->pointsVigueur,
			'caracForce' => $this->caracForce,
			'caracDexterite' => $this->caracDexterite,
			'caracConstitution' => $this->caracConstitution,
			'caracIntelligence' => $this->caracIntelligence,
			'caracSagesse' => $this->caracSagesse,
			'caracCharisme' => $this->caracCharisme,
			'caracChance' => $this->caracChance,
			'modifForce' => $this->modifForce,
			'modifDexterite' => $this->modifDexterite,
			'modifConstitution' => $this->modifConstitution,
			'modifIntelligence' => $this->modifIntelligence,
			'modifSagesse' => $this->modifSagesse,
			'modifCharisme' => $this->modifCharisme,
			'modifChance' => $this->modifChance,
			'compPointsADistribuer' => $this->compPointsADistribuer,
			'pouvoirPointsADistribuer' => $this->pouvoirPointsADistribuer,
			'acrobatie' => $this->acrobatie,
			'artMagieTech' => $this->artMagieTech,
			'artisanat' => $this->artisanat,
			'bluff' => $this->bluff,
			'connaissances' => $this->connaissances,
			'deguisement' => $this->deguisement,
			'diplomatie' => $this->diplomatie,
			'diplomatie' => $this->diplomatie,
			'dressage' => $this->dressage,
			'fouille' => $this->fouille,
			'artsMartiaux' => $this->artsMartiaux,
			'conduitePilotage' => $this->conduitePilotage,
			'escalade' => $this->escalade,
			'escamotage' => $this->escamotage,
			'estimation' => $this->estimation,
			'evasion' => $this->evasion,
			'intimidationRuse' => $this->intimidationRuse,
			'lunguistique' => $this->lunguistique,
			'natation' => $this->natation,
			'perception' => $this->perception,
			'premiersSecours' => $this->premiersSecours,
			'psychologie' => $this->psychologie,
			'jeuDActeur' => $this->jeuDActeur,
			'sabotage' => $this->sabotage,
			'survie' => $this->survie,
			'utilisationObjetsMagiques' => $this->utilisationObjetsMagiques,
			'volALaTire' => $this->volALaTire,
			'torture' => $this->torture,
			'resistance' => $this->resistance,
			'visee' => $this->visee,
			'decouverteTresors' => $this->decouverteTresors,
			'armesCaC' => $this->armesCaC,
			'armesADistance' => $this->armesADistance
		);
		$wpdb->insert($wpdb->prefix . "mjdr_Personnage", $objectToPush);
		$this->idPersonnage = $wpdb->insert_id;
	}

	public static function readAll()
	{
		global $wpdb;
		$query = "select * from " . $wpdb->prefix . "mjdr_Personnage";
		$liste = array();
		foreach ($wpdb->get_results($query) as $row)
			$liste[] = new Groupe($idPersonnage, $row->$idJoueur, $row->$nom, $row->$classe, $row->$race, $row->$traitsCaracteristiques, $row->$age, $row->$poids, $row->$taille, $row->$genre, $row->$yeux, $row->$peau, $row->$cheveux, $row->$dextrie, $row->$niveau, $row->$xpActuelle, $row->$xpProchainNiveau, $row->$faitOrdinaire, $row->$hautFait, $row->$motivationTitre, $row->$motivationDescription, $row->$obligationTitre, $row->$obligationDescription, $row->$vieActuelle, $row->$vieMax, $row->$magieActuelle, $row->$magieMax, $row->$vigueurActuelle, $row->$vigueurMax, $row->$pointsADistribuer, $row->$pointsVie, $row->$pointsMagie, $row->$pointsVigueur, $row->$caracForce, $row->$caracDexterite, $row->$caracConstitution, $row->$caracIntelligence, $row->$caracSagesse, $row->$caracCharisme, $row->$caracChance, $row->$modifForce, $row->$modifDexterite, $row->$modifConstitution, $row->$modifIntelligence, $row->$modifSagesse, $row->$modifCharisme, $row->$modifChance, $row->$compPointsADistribuer, $row->$pouvoirPointsADistribuer, $row->$acrobatie, $row->$artMagieTech, $row->$artisanat, $row->$bluff, $row->$connaissances, $row->$deguisement, $row->$diplomatie, $row->$discretion, $row->$dressage, $row->$fouille, $row->$artsMartiaux, $row->$conduitePilotage, $row->$escalade, $row->$escamotage, $row->$estimation, $row->$evasion, $row->$intimidationRuse, $row->$lunguistique, $row->$natation, $row->$perception, $row->$premiersSecours, $row->$psychologie, $row->$jeuDActeur, $row->$sabotage, $row->$survie, $row->$utilisationObjetsMagiques, $row->$volALaTire, $row->$torture, $row->$resistance, $row->$visee, $row->$decouverteTresors, $row->$armesCaC, $row->$armesADistance);
		return $liste;
	}

	public static function read($id)
	{
		global $wpdb;
		$query = "select * from " . $wpdb->prefix . "mjdr_Personnage where idPersonnage=" . $id;
		$row = $wpdb->get_row($query);
		$this->idPersonnage = $row->idPersonnage;
		$this->idJoueur = $row->idJoueur;
		$this->nom = $row->nom;
		$this->classe = $row->classe;
		$this->race = $row->race;
		$this->traitsCaracteristiques = $row->traitsCaracteristiques;
		$this->age = $row->age;
		$this->poids = $row->poids;
		$this->taille = $row->taille;
		$this->genre = $row->genre;
		$this->alignement = $row->alignement;
		$this->yeux = $row->yeux;
		$this->peau = $row->peau;
		$this->cheveux = $row->cheveux;
		$this->dextrie = $row->dextrie;
		$this->niveau = $row->niveau;
		$this->xpActuelle = $row->xpActuelle;
		$this->xpProchainNiveau = $row->xpProchainNiveau;
		$this->faitOrdinaire = $row->faitOrdinaire;
		$this->hautFait = $row->hautFait;
		$this->motivationTitre = $row->motivationTitre;
		$this->motivationDescription = $row->motivationDescription;
		$this->obligationTitre = $row->obligationTitre;
		$this->obligationDescription = $row->obligationDescription;
		$this->vieActuelle = $row->vieActuelle;
		$this->vieMax = $row->vieMax;
		$this->magieActuelle = $row->magieActuelle;
		$this->magieMax = $row->magieMax;
		$this->vigueurActuelle = $row->vigueurActuelle;
		$this->vigueurMax = $row->vigueurMax;
		$this->pointsADistribuer = $row->pointsADistribuer;
		$this->pointsVie = $row->pointsVie;
		$this->pointsMagie = $row->pointsMagie;
		$this->pointsVigueur = $row->pointsVigueur;
		$this->caracForce = $row->caracForce;
		$this->caracDexterite = $row->caracDexterite;
		$this->caracConstitution = $row->caracConstitution;
		$this->caracIntelligence = $row->caracIntelligence;
		$this->caracSagesse = $row->caracSagesse;
		$this->caracCharisme = $row->caracCharisme;
		$this->caracChance = $row->caracChance;
		$this->modifForce = $row->modifForce;
		$this->modifDexterite = $row->modifDexterite;
		$this->modifConstitution = $row->modifConstitution;
		$this->modifIntelligence = $row->modifIntelligence;
		$this->modifSagesse = $row->modifSagesse;
		$this->modifCharisme = $row->modifCharisme;
		$this->modifChance = $row->modifChance;
		$this->compPointsADistribuer = $row->compPointsADistribuer;
		$this->pouvoirPointsADistribuer = $row->pouvoirPointsADistribuer;
		$this->acrobatie = $row->acrobatie;
		$this->artMagieTech = $row->artMagieTech;
		$this->artisanat = $row->artisanat;
		$this->bluff = $row->bluff;
		$this->connaissances = $row->connaissances;
		$this->deguisement = $row->deguisement;
		$this->diplomatie = $row->diplomatie;
		$this->diplomatie = $row->diplomatie;
		$this->dressage = $row->dressage;
		$this->fouille = $row->fouille;
		$this->artsMartiaux = $row->artsMartiaux;
		$this->conduitePilotage = $row->conduitePilotage;
		$this->escalade = $row->escalade;
		$this->escamotage = $row->escamotage;
		$this->estimation = $row->estimation;
		$this->evasion = $row->evasion;
		$this->intimidationRuse = $row->intimidationRuse;
		$this->lunguistique = $row->lunguistique;
		$this->natation = $row->natation;
		$this->perception = $row->perception;
		$this->premiersSecours = $row->premiersSecours;
		$this->psychologie = $row->psychologie;
		$this->jeuDActeur = $row->jeuDActeur;
		$this->sabotage = $row->sabotage;
		$this->survie = $row->survie;
		$this->utilisationObjetsMagiques = $row->utilisationObjetsMagiques;
		$this->volALaTire = $row->volALaTire;
		$this->torture = $row->torture;
		$this->resistance = $row->resistance;
		$this->visee = $row->visee;
		$this->decouverteTresors = $row->decouverteTresors;
		$this->armesCaC = $row->armesCaC;
		$this->armesADistance = $row->armesADistance;
        return $this;
	}

	public static function readByKey($key, $value)
	{
		global $wpdb;
		$query = "select * from " . $wpdb->prefix . "mjdr_Personnage where " . $key . "=" . $value;
		$liste = array();
		foreach ($wpdb->get_results($query) as $row)
			$liste[] = new Groupe($idPersonnage, $row->$idJoueur, $row->$nom, $row->$classe, $row->$race, $row->$traitsCaracteristiques, $row->$age, $row->$poids, $row->$taille, $row->$genre, $row->$yeux, $row->$peau, $row->$cheveux, $row->$dextrie, $row->$niveau, $row->$xpActuelle, $row->$xpProchainNiveau, $row->$faitOrdinaire, $row->$hautFait, $row->$motivationTitre, $row->$motivationDescription, $row->$obligationTitre, $row->$obligationDescription, $row->$vieActuelle, $row->$vieMax, $row->$magieActuelle, $row->$magieMax, $row->$vigueurActuelle, $row->$vigueurMax, $row->$pointsADistribuer, $row->$pointsVie, $row->$pointsMagie, $row->$pointsVigueur, $row->$caracForce, $row->$caracDexterite, $row->$caracConstitution, $row->$caracIntelligence, $row->$caracSagesse, $row->$caracCharisme, $row->$caracChance, $row->$modifForce, $row->$modifDexterite, $row->$modifConstitution, $row->$modifIntelligence, $row->$modifSagesse, $row->$modifCharisme, $row->$modifChance, $row->$compPointsADistribuer, $row->$pouvoirPointsADistribuer, $row->$acrobatie, $row->$artMagieTech, $row->$artisanat, $row->$bluff, $row->$connaissances, $row->$deguisement, $row->$diplomatie, $row->$discretion, $row->$dressage, $row->$fouille, $row->$artsMartiaux, $row->$conduitePilotage, $row->$escalade, $row->$escamotage, $row->$estimation, $row->$evasion, $row->$intimidationRuse, $row->$lunguistique, $row->$natation, $row->$perception, $row->$premiersSecours, $row->$psychologie, $row->$jeuDActeur, $row->$sabotage, $row->$survie, $row->$utilisationObjetsMagiques, $row->$volALaTire, $row->$torture, $row->$resistance, $row->$visee, $row->$decouverteTresors, $row->$armesCaC, $row->$armesADistance);
		return $liste;
	}
	public function update()
	{
		global $wpdb;
		$objectToPush = array(
			'idPersonnage' => $this->idPersonnage,
			'idJoueur' => $this->idJoueur,
			'nom' => $this->nom,
			'classe' => $this->classe,
			'race' => $this->race,
			'traitsCaracteristiques' => $this->traitsCaracteristiques,
			'age' => $this->age,
			'poids' => $this->poids,
			'taille' => $this->taille,
			'genre' => $this->genre,
			'alignement' => $this->alignement,
			'yeux' => $this->yeux,
			'peau' => $this->peau,
			'cheveux' => $this->cheveux,
			'dextrie' => $this->dextrie,
			'niveau' => $this->niveau,
			'xpActuelle' => $this->xpActuelle,
			'xpProchainNiveau' => $this->xpProchainNiveau,
			'faitOrdinaire' => $this->faitOrdinaire,
			'hautFait' => $this->hautFait,
			'motivationTitre' => $this->motivationTitre,
			'motivationDescription' => $this->motivationDescription,
			'obligationTitre' => $this->obligationTitre,
			'obligationDescription' => $this->obligationDescription,
			'vieActuelle' => $this->vieActuelle,
			'vieMax' => $this->vieMax,
			'magieActuelle' => $this->magieActuelle,
			'magieMax' => $this->magieMax,
			'vigueurActuelle' => $this->vigueurActuelle,
			'vigueurMax' => $this->vigueurMax,
			'pointsADistribuer' => $this->pointsADistribuer,
			'pointsVie' => $this->pointsVie,
			'pointsMagie' => $this->pointsMagie,
			'pointsVigueur' => $this->pointsVigueur,
			'caracForce' => $this->caracForce,
			'caracDexterite' => $this->caracDexterite,
			'caracConstitution' => $this->caracConstitution,
			'caracIntelligence' => $this->caracIntelligence,
			'caracSagesse' => $this->caracSagesse,
			'caracCharisme' => $this->caracCharisme,
			'caracChance' => $this->caracChance,
			'modifForce' => $this->modifForce,
			'modifDexterite' => $this->modifDexterite,
			'modifConstitution' => $this->modifConstitution,
			'modifIntelligence' => $this->modifIntelligence,
			'modifSagesse' => $this->modifSagesse,
			'modifCharisme' => $this->modifCharisme,
			'modifChance' => $this->modifChance,
			'compPointsADistribuer' => $this->compPointsADistribuer,
			'pouvoirPointsADistribuer' => $this->pouvoirPointsADistribuer,
			'acrobatie' => $this->acrobatie,
			'artMagieTech' => $this->artMagieTech,
			'artisanat' => $this->artisanat,
			'bluff' => $this->bluff,
			'connaissances' => $this->connaissances,
			'deguisement' => $this->deguisement,
			'diplomatie' => $this->diplomatie,
			'diplomatie' => $this->diplomatie,
			'dressage' => $this->dressage,
			'fouille' => $this->fouille,
			'artsMartiaux' => $this->artsMartiaux,
			'conduitePilotage' => $this->conduitePilotage,
			'escalade' => $this->escalade,
			'escamotage' => $this->escamotage,
			'estimation' => $this->estimation,
			'evasion' => $this->evasion,
			'intimidationRuse' => $this->intimidationRuse,
			'lunguistique' => $this->lunguistique,
			'natation' => $this->natation,
			'perception' => $this->perception,
			'premiersSecours' => $this->premiersSecours,
			'psychologie' => $this->psychologie,
			'jeuDActeur' => $this->jeuDActeur,
			'sabotage' => $this->sabotage,
			'survie' => $this->survie,
			'utilisationObjetsMagiques' => $this->utilisationObjetsMagiques,
			'volALaTire' => $this->volALaTire,
			'torture' => $this->torture,
			'resistance' => $this->resistance,
			'visee' => $this->visee,
			'decouverteTresors' => $this->decouverteTresors,
			'armesCaC' => $this->armesCaC,
			'armesADistance' => $this->armesADistance
		);
		$wpdb->update($wpdb->prefix . "mjdr_Personnage", $objectToPush, array('id' => $this->idPersonnage));
	}

	public function delete()
	{
		global $wpdb;
		$wpdb->delete($wpdb->prefix . "mjdr_Personnage", array( 'id' => $this->idPersonnage));
	}

}