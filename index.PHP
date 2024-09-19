<?php


require_once './configuration/DbConnection.php';
require_once 'session.php';
 
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
          <a class="nav-link" href="#">Jeux</a>
        </li>
        <?php 
          
                if (isset($_SESSION["user"])): ?> 
                <p>Bonjour <?php echo $_SESSION["user"]["firstname"]; ?> </p>
                <a href="shopping.php">mon panier</a>
                <a href="form_ajout.php">Ajout jeux</a></li>
                <a href="logout.php">Déconnexion</a>
                
                <?php else: 
                    ?>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="form_co.php">Se connecter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="form_inscription.php">S'inscrire</a>
                    </li>
                </ul>

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
                </div>
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

<!--Start footer-->
    <footer class="footer">
        <!--Start section menu footer-->
        <section>
            <ul>
                <li>CGV</li>
                <li>RGPD</li>
                <li>Nos engagements</li>
                <li>FAQ</li>
            </ul>
        </section>
    <!--End section menu footer-->

    <!--Start section social-->
        <section>
            <h2>Nous suivre</h2>
            <div class="acces__reseau">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-x-twitter"></i>
            </div>
        </section>
    <!--End section social-->

    <!--Start form-->
        
        <form class="formulaire" action=""  method="">
            <fieldset class="fieldset">
                <legend>Nous contacter</legend>
            <ul>
                <li>
                    <label for="name"></label>
                    <input type="text">
                </li>
                <li>
                    <label for="lastname"></label>
                    <input type="text">
                </li>
                <li>
                    <label for="email"></label>
                    <input type="mail">
                </li>
                <li>
                    <select id="option" name="option">
                        <option>Retour</option>
                        <option>Livraison</option>
                        <option>Connextion</option>
                    </select>
                </li>
                <li>
                    <label for="message"></label>
                    <textarea id="message"></textarea>
                </li>
            </ul>

            <button type="submit">Envoyer votre demande</button>
            </fieldset>
        </form>
    <!--End form-->
    </footer>
<!--End footer-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>