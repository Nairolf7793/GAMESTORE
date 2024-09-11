<?php 

require_once 'DbConnection.php';
require_once 'session.php';


    $query = DbConnection::getPdo()->query('SELECT * FROM liste_game');
    $liste_game = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamestore</title>
    <link rel="stylesheet"   href="CSS/index.css">
</head>

<?php 

   require_once 'pdo.php';

    $query = $pdo->query('SELECT * FROM liste_game');
    $liste_game = $query->fetchAll(PDO::FETCH_ASSOC);

?>
<body>

<a href="form_ajout.php">ajout</a>
<div class="liste">
    <?php foreach ($liste_game as $valeur) { ?>
     <div class="liste_one">
            <h5><?php echo $valeur['nom'] ?></h5>
            <h6><?php echo $valeur['genre'] ?></h6>
            <p><?php echo $valeur['prix'] ?>€</p>
            <p><?php echo $valeur['pegi'] ?></p>
            <a href="detail.php?valeur_id=<?php echo $valeur['id'] ?>" class="card-link">Detail</a>
    </div>
    <?php } ?>
    </div>
   
    
</body>
</html>