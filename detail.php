<?php 
require_once "header.php";
require_once 'DbConnection.php';


    $valeur_id = $_GET['valeur_id'];
    $pdo = DbConnection::getPdo();
    $query = $pdo->query('SELECT * FROM liste_game WHERE id =' .$valeur_id);
    $valeur = $query->fetch(PDO::FETCH_ASSOC);

?>

<h1><?php echo $valeur['nom'] ?></h1>
     
        <p><?php echo $valeur['prix'] ?>€</p>
        <p><?php echo $valeur['pegi'] ?></p>
        <p><?php echo $valeur['genre'] ?></p>
    </div>
</div>