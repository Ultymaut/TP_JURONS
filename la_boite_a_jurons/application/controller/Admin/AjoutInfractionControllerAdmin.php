<?php
require_once "../../modele/service/InfractionDAO.php";
require_once "../../modele/service/HistoriqueDAO.php";
require_once "../../modele/service/UserDAO.php";
require_once "../../modele/BDConnexion.php";

session_start();

if (isset($conn)){
$UserDAO=new UserDAO($conn);

    $userListe=$UserDAO->selectAllUser();
    $listLogin = array();

        foreach ($userListe as $key => $value){
            $listLogin[]=$value['login'];
        }
        $_SESSION['login']=$listLogin;

$infractionDao = new InfractionDAO($conn);

    $infListe = $infractionDao->selectAllInfraction();
    $listLibelee=array();

        foreach ($infListe as $index => $item) {
            $listLibelee[]=$item['libelee'];
        }
        $_SESSION['libelee'] = $listLibelee;

$historiqueFaitDAO= new HistoriqueDAO($conn);

    $inserfait = $_POST['id_Infraction'];
    $inserfait = $_POST['id_user'];

    $insertFait= $historiqueFaitDAO->insertIntoFait($inserfait);
}

