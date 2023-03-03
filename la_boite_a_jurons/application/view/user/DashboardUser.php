<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/userStyle.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
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
    <div id="dashboardUser">
        <h1> BIENVENUE EN VILLE</h1>
        <div id="infoG">
            <span id="info">
                <?php session_start();
                ?>
                <label id="nom"><code>NOM: </code><?php echo $_SESSION['nom']; ?></label><br>
                <label id="prenom"><code>PRENOM: </code> <?php  echo $_SESSION['prenom']; ?></label><br>
                <label id="dateNaissance"><code>DATE DE NAISSANCE: </code><?php echo $_SESSION['naiss']; ?></label><br>
                <label id="login"><code>USERNAME: </code><?php echo $_SESSION['login'] ?></label>
            </span>
            <span id="solde">
                
            </span>
        </div>

        <div id="histoJ"></div>




    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../assets/Dash.js"></script>
  
</body>

</html>