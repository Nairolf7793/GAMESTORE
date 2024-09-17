<?php


require_once 'DbConnection.php';
require_once 'session.php';
require_once 'header.php';
 
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
    <link ref="stylesheet" href="./CSS/index.css">
    <title>Gamestore</title>
</head>
<body>


    <!--start section descprition-->
        <section class="header__description">
            <p><span class="header__span">Gamestore : </span>votre destination incontournable pour tous vos besoins en jeux vidéo.
             Avec cinq magasins situés stratégiquement en France, à Nantes, Lille, Bordeaux, 
             Paris et Toulouse, nous vous offrons une expérience unique, que ce soit en ligne 
             ou en magasin. Découvrez notre vaste sélection de jeux vidéo couvrant toutes les 
             plateformes populaires, pour tous les goûts et tous les âges. Que vous soyez un 
             passionné de consoles, de jeux PC ou de jeux sur mobile, Gamestore a ce qu'il vous 
             faut pour enrichir votre expérience de jeu.
            "Plongez dans l'univers du jeu vidéo avec Gamestore, votre destination incontournable pour les nouveautés 
            et les classiques sur toutes les plateformes !"
            </p>
        </section>
    <!--End section description-->
    </header>
<!--End Header-->

<!--Start page d'acceuil-->
    <!--Start section actu-->
    <section class="actu">
        <h1>L'actualité du mois</h1>
        <aside class="annonce">
            <div class="annonce__img">
                <img src="./asset/gta2.jpg.jpg" alt="image representant le jeu gta 2" title="image jeu gta 2">
            </div>
            <div class="annonce__description">
                <h2>Decouvrer l'actu du mois</h2>
                <ul>
                    <li>GTA 2</li>
                    <li>PEGI 18</li>
                    <li>19.99€</li>
                </ul>
                <button>En savoir plus</button>
            </div>
        </aside>
    </section>
    <!--End section actu-->

    <!--Start section promo-->
    <section class="promo">
        <h1>La promo Gamestore</h1>
        <aside class="annonce">
            <div class="annonce__description">
                <h2>Decouvrer l'actu du mois</h2>
                <ul>
                    <li>GTA 1</li>
                    <li>PEGI 18</li>
                    <li>19.99€ 12.99€</li>
                </ul>
                <button>En savoir plus</button>
            </div>
            <div class="annonce__img2">
                <img src="./asset/gta.jpg.jpg" alt="image representant le jeu gta" title="image jeu gta">
            </div>
        </aside>
    </section>
    <!--End section promo-->
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
</body>
</html>