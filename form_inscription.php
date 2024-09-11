<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gamestore</title>
</head>
<body>

<?php

require_once 'DbConnection.php';
require_once 'session.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(!$_POST['username'] || !$_POST['mp']) {
        echo 'identifiant invalide';
    } else {
        $username=$_POST['username'];
        $mp=$_POST['mp'];
        $hash=password_hash($mp,PASSWORD_BCRYPT);

        
        $query = DbConnection::getPdo()->prepare('INSERT INTO user (username, mp)
        VALUES (
        :username,
        :mp)
        ');

        $query->bindParam(':username', $_POST['username']);
        $query->bindParam(':mp', $hash);

        if (!$query->execute()){
            echo "une erreur est survenue";
        }
        else {
            $_SESSION["success message"] = "Votre compte a bien été crée";
            header('location: form_co.php'); }
      
    }
   
}
?>

<header class="header">
        <nav class="navbar">
            
            <img src="asset/LOGO.png" alt="image du logo gamestore" title="logo gamestore">
          
            <ul class="navigation">
                <li class="navigation__li"><a href="index.php">Acceuil</a></li>
                <li class="navigation__li"><a href="liste.php">Jeux</a></li>
                <li class="navigation__li"><a href="form_ajout.php">Ajout</a></li>
            </ul>
            
            <button class="navbar__button" type="submit"><a href="form_inscription.php">S'inscrire</a></button>
            <button class="navbar__button" type="submit"><a href="form_co.php">Se connecter</a></button>
            <?php 
                if (isset($_SESSION["user"])): ?>
                <a href="logout.php">Déconnexion</a>
                <?php echo $_SESSION["user"]["username"]; ?>
                <?php else: ?>
                    <a href="form_co.php">connexion</a>
                <?php endif; ?>
        </nav>


    <form action="" method="post">
        <label for="username">username</label>
        <input type="text" id="username" name="username">

        <label for="mp">password</label>
        <input type="text" id="mp" name="mp">

        <button type="submit">inscription</button>

    </form>


</body>
</html>