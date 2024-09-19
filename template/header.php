<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
    <header class="header">
        <nav class="navbar">
            
            <img src="../asset/LOGO.png" alt="image du logo gamestore" title="logo gamestore">
          
            <ul class="navigation">
                <li class="navigation__li"><a href="index.php">Acceuil</a></li>
                <li class="navigation__li"><a href="./template/liste.php">Jeux</a></li>
            </ul>

            <?php 
          
                if (isset($_SESSION["user"])): ?> 
                <p>Bonjour <?php echo $_SESSION["user"]["firstname"]; ?> </p>
                <a href="shopping.php">mon panier</a>
                <a href="form_ajout.php">Ajout jeux</a></li>
                <a href="logout.php">Déconnexion</a>
                
                <?php else: 
                    ?>
                    <button class="navbar__button" type="submit"><a href="form_co.php">Se connecter</a></button>
                    <button class="navbar__button" type="submit"><a href="form_inscription.php">S'inscrire</a></button>
                <?php endif; ?>  
        
        </nav>