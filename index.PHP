<?php


require_once './db/DbConnection.php';
require_once './template/configuration/session.php';
 
 DbConnection::getPdo();

 $query = DbConnection::getPdo()->query('SELECT * FROM liste_game');
 $liste_game = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/122336720d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link ref="stylesheet" href="./CSS/index.css">
    <title>Gamestore</title>
</head>
<body>

<!-- start navbar -->
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand">
                    <img src="./asset/LOGO.png" alt="Bootstrap" width="100" height="100">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./template/liste.php">Jeux</a>
                        </li>
                        <?php 
                            if (isset($_SESSION["user"])): ?> 
                            <p>Bonjour <?php echo $_SESSION["user"]["firstname"]; ?> </p>
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="./template/shopping.php">Mon panier</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./template/form_ajout.php">Ajout jeux</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./template/configuration/logout.php">Déconnexion</a>
                            </li>
                        </ul>
                        <?php else: 
                        ?>
                        <div class="d-flex justify-content-around">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./template/form_co.php">Se connecter</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./template/form_inscription.php">S'inscrire</a>
                            </li>
                        </div>
                        <?php endif; ?> 
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<!-- end navbar -->

    <!--start section descprition-->
    <div class="card text-bg-dark">
        <img src="./asset/fond.png" class="card-img" alt="..." width='100vh'>
        <div class="card-img-overlay">
            <h5 class="card-title">Bienvenue chez Gamestore : </h5>
            <p class="card-text">votre destination incontournable pour tous vos besoins en jeux vidéo.
             Avec cinq magasins situés stratégiquement en France, à Nantes, Lille, Bordeaux, 
             Paris et Toulouse, nous vous offrons une expérience unique, que ce soit en ligne 
             ou en magasin. Découvrez notre vaste sélection de jeux vidéo couvrant toutes les 
             plateformes populaires, pour tous les goûts et tous les âges. Que vous soyez un 
             passionné de consoles, de jeux PC ou de jeux sur mobile, Gamestore a ce qu'il vous 
             faut pour enrichir votre expérience de jeu.</p>
            <p class="card-text"><small>  "Plongez dans l'univers du jeu vidéo avec Gamestore, votre destination incontournable pour les nouveautés 
            et les classiques sur toutes les plateformes !"</small></p>
        </div>
    </div>
    <!--End section description-->
    
<!--End Header-->

<!--Start page d'acceuil-->
    <!--Start section actu-->
    <div class="card mb-3" style="max-width: 100%;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="./asset/gta2.jpg.jpg" class="img-fluid rounded-start" alt="image representant le jeu gta 2" title="image jeu gta 2">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-text text-center">L'actu du mois</h5>
                    <p class="card-text text-center">GTA 2</p>
                    <p class="card-text text-center"><small class="text-body-secondary">PEGI 18</small></p>
                    <p class="card-text text-center"><small class="text-body-secondary">19.99€</small></p>
                    <p class="card-text text-center"><small class="text-body-secondary"><a href="#" class="btn btn-primary">En savoir plus</a> </small></p>  <!--ajout d'un p pour aligner le boutton -->
                </div> <!-- boutton en savoir plus inactif, doit renvoyer vers detail.php -->
            </div>            
        </div>
    </div>
    <!-- end section actu -->

    <!-- start section promo -->
    <div class="card mb-3" style="max-width: 100%;">
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body mx-auto p-2" style="width: 200px;">
                    <h5 class="card-text text-center">L'actu du mois</h5>
                    <p class="card-text text-center">GTA</p>
                    <p class="card-text text-center"><small class="text-body-secondary">PEGI 18</small></p>
                    <p class="card-text text-center"><small class="text-body-secondary">12€99</small></p>
                    <p class="card-text text-center"><small class="text-body-secondary"><a href="#" class="btn btn-primary">En savoir plus</a> </small></p>  
                </div>
            </div>
            <div class="col-md-4">
                <img src="./asset/gta.jpg.jpg" class="img-fluid rounded-start" alt="image representant le jeu gta 2" title="image jeu gta 2">
            </div>
        </div>
    </div>
    <!-- end section promo -->
<!--End page d'acceuil-->
<footer>
    <div class="d-flex justify-content-around">

        <ul class="nav col-md-4">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Accueil</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">CGV</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">RGPD</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Nos engagements</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQ</a></li>
        </ul>

        <ul class="nav col-md-4 list-unstyled d-flex">
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><i class="fa-brands fa-facebook"></i></svg></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><i class="fa-brands fa-instagram"></i></svg></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><i class="fa-brands fa-x-twitter"></i></svg></a></li>
        </ul>

        <form action="" method="" class="text-center"> <!-- class text center pour tout aligner dont le bouton -->
            <div>
                <label for="" class="form-label"></label>
                <input type="text" class="form-control" id="" placeholder="Votre nom">
            </div>
            <div>
                <label for=""></label>
                <input type="text" class="form-control" id="" placeholder="Votre prénom">
            </div>
            <div>
                <label for="" class="form-label"></label>
                <input type="email" class="form-control" id="" placeholder="email : name@example.com">
            </div>
            <div>
                <label for="" class="form-label"></label>
                <select class="form-select" aria-label="Default select example">
                    <option selected></option>
                    <option value="1">Retour</option>
                    <option value="2">Livraison</option>
                    <option value="3">Connexion</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Votre message"></textarea>
            </div>
            <div class= "mt-1">
                <button type="submit" class="btn btn-primary">Envoyez votre demande</button>
            </div>
        </form>
    </div>
    <div>
        <p class="text-center text-body-secondary">© 2024</p>
    </div>
    
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>