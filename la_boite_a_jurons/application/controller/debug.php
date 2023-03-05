<?php
include_once "../modele/BDConnexion.php";
require_once "../modele/service/UserDAO.php";
require_once "../modele/service/InfractionDAO.php";
require_once "../modele/service/HistoriqueDAO.php";
require_once '../modele/Profile.class.php';
require_once '../modele/Infraction.class.php';
require_once '../modele/User.class.php';
require_once '../modele/service/HistoriqueDAO.php';

$UserDAO = new UserDAO($conn);
$userListe = $UserDAO->selectAllUser();

var_dump($userListe[0]['login']);