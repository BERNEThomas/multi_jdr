<?php

$groupe = new Groupe(null, $_POST["groupe_nom"], $_POST["groupe_mdp"]);
$groupe->create();

header('Location: liste-des-groupes/');