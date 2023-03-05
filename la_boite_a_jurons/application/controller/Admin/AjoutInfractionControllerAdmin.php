<?php
require_once "C:/xampp\htdocs\la_boite_a_jurons\application\modele\service\InfractionDAO.php";
require_once "C:/xampp\htdocs\la_boite_a_jurons\application\modele\service\HistoriqueDAO.php";
require_once "C:/xampp\htdocs\la_boite_a_jurons\application\modele\service\UserDAO.php";
require_once "C:/xampp\htdocs\la_boite_a_jurons\application\modele\BDConnexion.php";

 session_start();

if (isset($conn)) {
    $UserDAO = new UserDAO($conn);

    $userListe = $UserDAO->selectAllUser();

    foreach ($userListe as $key => $value) {
        $listNom[] = $value['nom'];
    }
    $_SESSION['nom'] = $listNom;

    $infractionDao = new InfractionDAO($conn);

    $infListe = $infractionDao->selectAllInfraction();
    $listLibelee = array();

    foreach ($infListe as $index => $item) {
        $listLibelee[] = $item['libelee'];
    }
    $_SESSION['libelee'] = $listLibelee;

    //
    if (isset($_POST['libelee'], $_POST['nom'])) {

        $historiqueFaitDAO = new InfractionDAO($conn);

        $infraction = $infractionDao->selectInfractionsByLibelee($_POST['libelee']);

        foreach ($userListe as $index => $item) {
            $nom = $item['nom'];
            if ($nom == $_POST['nom']) {
                $login = $item['login'];
                break;
            }
        }
        if (isset($login)) {
            $user = $UserDAO->getUsertByLogin($login);
            var_dump($user);
            var_dump($login);
//            $infraction = $infractionDao->selectInfractionsByLibelee($_POST['libelee']);
//            $infractionDao->incrementeInfraction($user, $infraction);
//
//            $id_user = $user->getId_user();
//            $solde = $UserDAO->updateUserSolde($user);
//            $user ->setSolde($solde);

        }


    }
}

