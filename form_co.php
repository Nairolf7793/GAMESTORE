<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gamestore</title>
</head>


<?php
require_once 'DbConnection.php';
require_once 'session.php';



if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(!$_POST['firstname'] || !$_POST['mp']) {
        echo 'identifiant incorrect';
    } else {

        $firstname = $_POST['firstname'];
        $mp = $_POST['mp'];
        $db = DbConnection::getPdo();
        $sql = ('SELECT * FROM user WHERE firstname = :firstname'); //requete stockée dans variable
        $query = $db->prepare($sql);
        
        $query->bindParam(':firstname', $firstname);

        $query->execute();

        $user = $query->fetch(PDO::FETCH_ASSOC);

        if(!$user){
            echo 'identifiant incorrect';

        } else {
           $mpOk = password_verify($mp, $user['mp']);

           if (!$mpOk) {
            echo 'mp incorrect';

           } else {
            $_SESSION["user"]= $user;
            header('location: index.php');
            exit();
           }
        }

    }
}
?>
<body>
    
<!--<header class="header">
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
                <?php echo $_SESSION["user"]["firstname"]; ?>
                <?php else: ?>
                    <a href="form_co.php">connexion</a>
                <?php endif; ?>
        </nav>   -->

    <h1>Se connecter</h1>

    <?php
        if(isset($_SESSION["success message"])): ?>
        <?php echo "compte crée";
        unset($_SESSION["success message"]); //unset pour supprimer le message (success) en réactualisant la page, supprime donnée
        ?>
        <?php endif; ?>


    <form action="" method="post">
        <label for="firstname">firstname</label>
        <input type="text" id="firstname" name="firstname">

        <label for="mp">password</label>
        <input type="password" id="mp" name="mp">

        <button type="submit">connection</button>

    </form>

     

</body>
</html>