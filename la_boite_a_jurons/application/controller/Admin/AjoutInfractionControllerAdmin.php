<?php
require_once "../../modele/service/InfractionDAO.php";
require_once "../../modele/service/HistoriqueDAO.php";
require_once "../../modele/service/UserDAO.php";
require_once "../../modele/BDConnexion.php";

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
    if (isset($_GET['libelee'], $_GET['nom'])) {

        $historiqueFaitDAO = new InfractionDAO($conn);

        $infraction = $infractionDao->selectInfractionsByLibelee($_GET['libelee']);

        foreach ($userListe as $index => $item) {
            $nom = $item['nom'];
            if ($nom == $_GET['nom']) {
                $login = $item['login'];
                break;
            }
        }
        if (isset($login)) {
            $user = $UserDAO->getUsertByLogin($login);
            $infraction = $infractionDao->selectInfractionsByLibelee($_GET['libelee']);
            $infractionDao->incrementeInfraction($user, $infraction);
            $id_user = $user->getId_user();
            $solde = $UserDAO->updateUserSolde($user);
            var_dump($solde);
        }


//        $user ->setSolde($solde);
//        $historiqueFaitDAO->incrementeInfraction($user, $infraction);

    } else {
        echo "no data";
    }
}

