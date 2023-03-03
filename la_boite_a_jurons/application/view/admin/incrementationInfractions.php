<?php include_once "../../controller/Admin/AjoutInfractionControllerAdmin.php"?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Boite a JURON</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/userStyle.css">
</head>
<body>

<div class="area"></div>
<nav class="main-menu">
    <ul>
        <li>
            <a href="https://jbfarrow.com">
                <i class="fa fa-home fa-2x"></i>
                <span class="nav-text">
                        Home
                    </span>
            </a>

        </li>
        <li class="has-subnav">
            <a href="#">
                <i class="fa fa-globe fa-2x"></i>
                <span class="nav-text">
                        Community
                    </span>
            </a>

        </li>
        <li class="has-subnav">
            <a href="#">
                <i class="fa fa-bullseye fa-2x"></i>
                <span class="nav-text">
                        Target
                    </span>
            </a>

        </li>

        <ul class="logout">
            <li>
                <a href="../../controller/logoutController.php">
                    <i class="fa fa-power-off fa-2x"></i>
                    <span class="nav-text">
                            Logout
                        </span>
                </a>
            </li>
        </ul>
</nav>

<div class="d-flex mt-5 ms-5 ps-5 me-5 justify-content-center">
                                <!--chox d un user-->
    <select class="form-select form-select-lg ms-5 mb-3" aria-label=".form-select-lg example">
        <option selected>choisie le malfaiteur</option>
        <option value="" name="id_user">       <?php
            foreach ($_SESSION['login'] as $index => $item) {
                echo "<option value=''name='id_user'>".$item."</option>" ;
            }
            ?></option>
    </select>

    <select class="form-select form-select-lg ms-5 mb-3" aria-label=".form-select-lg example">
        <option selected>choisie le malfaiteur</option>
        <option value="" name="id_Infraction">       <?php
            foreach ($_SESSION['libelee'] as $index => $item) {
                echo "<option value='' name='id_Infraction'>".$item."</option>" ;
            }
            ?></option>
    </select>
</div>
<div class="d-flex mt-5 ms-5 ps-5 me-5 justify-content-center">
    <a href=" ">
<button type="button" class="btn btn-outline-primary" formmethod="post">Balance</button> </a>
</div >

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>