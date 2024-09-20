<?php 

require_once '../configuration/DbConnection.php';
require_once '../session.php';

    $valeur_id = $_GET['valeur_id'];
    $pdo = DbConnection::getPdo();
    $query = $pdo->query('SELECT * FROM liste_game WHERE id =' .$valeur_id);
    $valeur = $query->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/122336720d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link ref="stylesheet" href="../CSS/index.css">
    <title>Gamestore</title>
</head>
<body>

<!-- start navbar -->
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand">
                    <img src="../asset/LOGO.png" alt="Bootstrap" width="100" height="100">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../index.PHP">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./liste.php">Jeux</a>
                        </li>
                            <?php 
                            if (isset($_SESSION["user"])): ?> 
                            <p>Bonjour <?php echo $_SESSION["user"]["firstname"]; ?> </p>
                            <a href="shopping.php">Mon panier</a>
                            <a href="form_ajout.php">Ajout jeux</a></li>
                            <a href="logout.php">Déconnexion</a>
                            <?php else: 
                            ?>
                        <div class="d-flex justify-content-around">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="form_co.php">Se connecter</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="form_inscription.php">S'inscrire</a>
                            </li>
                        </div>
                            <?php endif; ?> 
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<!--end header -->

<!--stat section card_detail -->
    <section class="card_detail">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $valeur['nom'] ?></h5>
                        <p class="card-text"><?php echo $valeur['prix'] ?>€</p>
                        <p class="card-text"><?php echo $valeur['pegi'] ?></p>
                        <p class="card-text"><?php echo $valeur['genre'] ?></p>
                        <?php 
                            if (isset($_SESSION["user"])): ?> 
                        <a href="#" class="btn btn-primary">Ajouter au panier</a>
                        <?php else: //retirer le bouton ajouter au panier si pas connecté
                            ?>
                    </div>
                    <?php endif; ?> 
                </div>
            </div>
        </div>
    </section>
</body>
</html>